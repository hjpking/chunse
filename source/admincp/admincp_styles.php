<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: admincp_styles.php 28030 2012-02-21 05:43:34Z monkey $
 */

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

if(!empty($_G['gp_preview'])) {
	loadcache('style_'.$_GET['styleid']);
	$_G['style'] = $_G['cache']['style_'.$_GET['styleid']];
	include template('common/preview', $_G['style']['templateid'], $_G['style']['tpldir']);
	exit;
}

$scrolltop = $_G['gp_scrolltop'];
$anchor = $_G['gp_anchor'];
$namenew = $_G['gp_namenew'];
$availablenew = $_G['gp_availablenew'];
$defaultnew = $_G['gp_defaultnew'];
$newname = $_G['gp_newname'];
$id = $_G['gp_id'];

$operation = empty($operation) ? 'admin' : $operation;

if($operation == 'export' && $id) {
	$stylearray = DB::fetch_first("SELECT s.name, s.templateid, t.name AS tplname, t.directory, t.copyright FROM ".DB::table('common_style')." s LEFT JOIN ".DB::table('common_template')." t ON t.templateid=s.templateid WHERE styleid='$id'");
	if(!$stylearray) {
		cpheader();
		cpmsg('styles_export_invalid', '', 'error');
	}

	$query = DB::query("SELECT * FROM ".DB::table('common_stylevar')." WHERE styleid='$id'");
	while($style = DB::fetch($query)) {
		$stylearray['style'][$style['variable']] = $style['substitute'];
	}

	$stylearray['version'] = strip_tags($_G['setting']['version']);
	exportdata('Discuz! Style', $stylearray['name'], $stylearray);
}

cpheader();

$predefinedvars = array('available' => array(), 'boardimg' => array(), 'imgdir' => array(), 'styleimgdir' => array(), 'stypeid' => array(),
	'headerbgcolor' => array(0, $lang['styles_edit_type_bg']),
	'bgcolor' => array(0),
	'sidebgcolor' => array(0, '', '#FFF sidebg.gif repeat-y 100% 0'),
	'titlebgcolor' => array(0),

	'headerborder' => array(1, $lang['styles_edit_type_header'], '1px'),
	'headertext' => array(0),
	'footertext' => array(0),

	'font' => array(1, $lang['styles_edit_type_font']),
	'fontsize' => array(1),
	'threadtitlefont' => array(1, $lang['styles_edit_type_thread_title']),
	'threadtitlefontsize' => array(1),
	'smfont' => array(1),
	'smfontsize' => array(1),
	'tabletext' => array(0),
	'midtext' => array(0),
	'lighttext' => array(0),

	'link' => array(0, $lang['styles_edit_type_url']),
	'highlightlink' => array(0),
	'lightlink' => array(0),

	'wrapbg' => array(0),
	'wrapbordercolor' => array(0),

	'msgfontsize' => array(1, $lang['styles_edit_type_post'], '14px'),
	'contentwidth' => array(1),
	'contentseparate' => array(0),

	'menubgcolor' => array(0, $lang['styles_edit_type_menu']),
	'menutext' => array(0),
	'menuhoverbgcolor' => array(0),
	'menuhovertext' => array(0),

	'inputborder' => array(0, $lang['styles_edit_type_input']),
	'inputborderdarkcolor' => array(0),
	'inputbg' => array(0, '', '#FFF'),

	'dropmenuborder' => array(0, $lang['styles_edit_type_dropmenu']),
	'dropmenubgcolor' => array(0),

	'floatbgcolor' => array(0, $lang['styles_edit_type_float']),
	'floatmaskbgcolor' => array(0),

	'commonborder' => array(0, $lang['styles_edit_type_other']),
	'commonbg' => array(0),
	'specialborder' => array(0),
	'specialbg' => array(0),
	'noticetext' => array(0),
);

if($operation == 'admin') {

	$query = DB::query("SELECT s.styleid, s.available, s.name, t.name AS tplname, t.directory, t.copyright FROM ".DB::table('common_style')." s LEFT JOIN ".DB::table('common_template')." t ON t.templateid=s.templateid ORDER BY s.available desc, s.styleid");
	$sarray = $tpldirs = array();
	while($row = DB::fetch($query)) {
		$sarray[$row['styleid']] = $row;
		$tpldirs[] = realpath($row['directory']);
	}

	$defaultid = DB::result_first("SELECT svalue FROM ".DB::table('common_setting')." WHERE skey='styleid'");

	if(!submitcheck('stylesubmit')) {
		$narray = array();
		$dir = DISCUZ_ROOT.'./template/';
		$templatedir = dir($dir);$i = -1;
		while($entry = $templatedir->read()) {
			$tpldir = realpath($dir.'/'.$entry);
			if(!in_array($entry, array('.', '..')) && !in_array($tpldir, $tpldirs) && is_dir($tpldir)) {
				$styleexist = 0;
				$searchdir = dir($tpldir);
				while($searchentry = $searchdir->read()) {
					if(substr($searchentry, 0, 13) == 'discuz_style_' && fileext($searchentry) == 'xml') {
						$styleexist++;
					}
				}
				if($styleexist) {
					$narray[$i] = array(
						'styleid' => '',
						'available' => '',
						'name' => $entry,
						'directory' => './template/'.$entry,
						'name' => $entry,
						'tplname' => $entry,
						'filemtime' => @filemtime($dir.'/'.$entry),
						'stylecount' => $styleexist
					);
					$i--;
				}
			}
		}

		uasort($narray, 'filemtimesort');
		$sarray += $narray;

		$stylelist = '';
		$i = 0;
		foreach($sarray as $id => $style) {
			$style['name'] = dhtmlspecialchars($style['name']);
			$isdefault = $id == $defaultid ? 'checked' : '';
			$available = $style['available'] ? 'checked' : NULL;
			$preview = file_exists($style['directory'].'/preview.jpg') ? $style['directory'].'/preview.jpg' : './static/image/admincp/stylepreview.gif';
			$previewlarge = file_exists($style['directory'].'/preview_large.jpg') ? $style['directory'].'/preview_large.jpg' : '';
			$styleicons = isset($styleicons[$id]) ? $styleicons[$id] : '';
			$stylelist .= ($i == 0 ? '<tr>' : '').
				'<td width="33%" '.($available ? 'style="background: #F2F9FD"' : '').'><table cellspacing="0" cellpadding="0" style="margin-left: 10px; width: 200px;"><tr><td style="width: 120px; text-align: center; border-top: none;">'.
				($id > 0 ? "<p style=\"margin-bottom: 2px;\">&nbsp;</p><img ".($previewlarge ? 'style="cursor:pointer" title="'.$lang['preview_large'].'" onclick="zoom(this, \''.$previewlarge.'\', 1)" ' : '')."src=\"$preview\" alt=\"$lang[preview]\"/></a>
				<p style=\"margin: 2px 0\"><input type=\"text\" class=\"txt\" name=\"namenew[$id]\" value=\"$style[name]\" size=\"30\" style=\"margin-right:0; width: 80px;\"></p>
				<p class=\"lightfont\">($style[tplname])</p></td><td style=\"padding-top: 17px; width: 80px; border-top: none; vertical-align: top;\">
				<p style=\"margin: 2px 0\"><label>$lang[default] <input type=\"radio\" class=\"radio\" name=\"defaultnew\" value=\"$id\" $isdefault /></label></p>
				<p style=\"margin: 2px 0\"><label>$lang[styles_uninstall] ".($isdefault ? '<input class="checkbox" type="checkbox" disabled="disabled" />' : '<input class="checkbox" type="checkbox" name="delete[]" value="'.$id.'" />')."</label></p>
				<p style=\"margin: 8px 0 2px\"><a href=\"".ADMINSCRIPT."?action=styles&operation=edit&id=$id\">$lang[edit]</a></p>
				<p style=\"margin: 2px 0\"><a href=\"".ADMINSCRIPT."?action=styles&operation=export&id=$id\">$lang[export]</a></p>
				<p style=\"margin: 2px 0\"><a href=\"".ADMINSCRIPT."?action=styles&operation=copy&id=$id\">$lang[copy]</a></p>
				<p style=\"margin: 2px 0\"><a href=\"".ADMINSCRIPT."?action=styles&operation=import&dir=yes&restore=$id\">$lang[restore]</a></p>" :
				"<p style=\"margin-bottom: 2px;\">&nbsp;</p>
				<img src=\"$preview\" />
				<p style=\"margin: 13px 0\" class=\"lightfont\">($style[tplname])</p></td><td style=\"padding-top: 17px; width: 80px; border-top: none; vertical-align: top;\">
				<p style=\"margin: 2px 0\"><a href=\"".ADMINSCRIPT."?action=styles&operation=import&dir=$style[name]\">$lang[styles_install]</a></p>
				<p style=\"margin: 2px 0\">$lang[styles_stylecount]$style[stylecount]</p>".
				($style['filemtime'] > $timestamp - 86400 ? '<p style=\"margin-bottom: 2px;\"><font color="red">New!</font></p>' : '')).
				"</td></tr></table></td>\n".($i == 3 ? '</tr>' : '');
			$i++;
			if($i == 3) {
				$i = 0;
			}
		}
		if($i > 0) {
			$stylelist .= str_repeat('<td></td>', 3 - $i);
		}

		shownav('style', 'styles_admin');
		showsubmenu('styles_admin', array(
			array('admin', 'styles', '1'),
			array('import', 'styles&operation=import', '0'),
			array('cloudaddons_style_link', 'cloudaddons')
		));
		showtips('styles_admin_tips');
		showformheader('styles');
		showhiddenfields(array('updatecsscache' => 0));
		showtableheader();
		echo $stylelist;
		showtablefooter();
		showtableheader();
		echo '<tr><td>'.$lang['add_new'].'</td><td><input type="text" class="txt" name="newname" size="18"></td><td colspan="5">&nbsp;</td></tr>';
		showsubmit('stylesubmit', 'submit', 'del', '<input onclick="this.form.updatecsscache.value=1" type="submit" class="btn" name="stylesubmit" value="'.cplang('styles_csscache_update').'">');
		showtablefooter();
		showformfooter();

	} else {

		if($_G['gp_updatecsscache']) {
			updatecache(array('setting', 'styles'));
			loadcache('style_default', true);
			updatecache('updatediytemplate');
			$tpl = dir(DISCUZ_ROOT.'./data/template');
			while($entry = $tpl->read()) {
				if(preg_match("/\.tpl\.php$/", $entry)) {
					@unlink(DISCUZ_ROOT.'./data/template/'.$entry);
				}
			}
			$tpl->close();
			cpmsg('csscache_update', 'action=styles', 'succeed');
		} else {

			if(is_numeric($_G['gp_defaultnew']) && $defaultid != $_G['gp_defaultnew'] && isset($sarray[$_G['gp_defaultnew']])) {
				$defaultid = $_G['gp_defaultnew'];
				DB::query("UPDATE ".DB::table('common_setting')." SET svalue='$defaultid' WHERE skey='styleid'");
			}

			$availablenew[$defaultid] = 1;

			foreach($sarray as $id => $old) {
				$namenew[$id] = trim($_G['gp_namenew'][$id]);
				$availablenew[$id] = $_G['gp_availablenew'][$id] ? 1 : 0;
				if($namenew[$id] != $old['name'] || $availablenew[$id] != $old['available']) {
					DB::query("UPDATE ".DB::table('common_style')." SET name='$namenew[$id]', available='$availablenew[$id]' WHERE styleid='$id'");
				}
			}

			$delete = $_G['gp_delete'];
			if(!empty($delete) && is_array($delete)) {
				$did = array();
				foreach($delete as $id) {
					$id = intval($id);
					if($id == $defaultid) {
						cpmsg('styles_delete_invalid', '', 'error');
					} elseif($id != 1){
						$did[] = intval($id);
					}
				}
				if($did && ($ids = dimplode($did))) {
					$query = DB::query("SELECT templateid FROM ".DB::table('common_style')."");
					$tplids = array();
					while($style = DB::fetch($query)) {
						$tplids[$style['templateid']] = $style['templateid'];
					}
					DB::query("DELETE FROM ".DB::table('common_style')." WHERE styleid IN ($ids)");
					DB::query("DELETE FROM ".DB::table('common_stylevar')." WHERE styleid IN ($ids)");
					DB::query("UPDATE ".DB::table('forum_forum')." SET styleid='0' WHERE styleid IN ($ids)");
					$query = DB::query("SELECT templateid FROM ".DB::table('common_style')."");
					while($style = DB::fetch($query)) {
						unset($tplids[$style['templateid']]);
					}
					if($tplids) {
						require_once libfile('function/cloudaddons');
						$query = DB::query("SELECT directory FROM ".DB::table('common_template')." WHERE templateid IN (".dimplode($tplids).")");
						while($tpl = DB::fetch($query)) {
							cloudaddons_uninstall(basename($tpl['directory']).'.template', $tpl['directory']);
						}
						DB::query("DELETE FROM ".DB::table('common_template')." WHERE templateid IN (".dimplode($tplids).")");
					}
				}
			}

			if($_G['gp_newname']) {
				$styleidnew = DB::insert('common_style', array('name' => $_G['gp_newname'], 'templateid' => 1), 1);
				foreach(array_keys($predefinedvars) as $variable) {
					$substitute = isset($predefinedvars[$variable][2]) ? $predefinedvars[$variable][2] : '';
					DB::insert('common_stylevar', array('styleid' => $styleidnew, 'variable' => $_G['gp_variable'], 'substitute' => $substitute));
				}
			}

			updatecache(array('setting', 'styles'));
			loadcache('style_default', true);
			updatecache('updatediytemplate');
			cpmsg('styles_edit_succeed', 'action=styles', 'succeed');
		}

	}

} elseif($operation == 'import') {

	if(!submitcheck('importsubmit') && !isset($_G['gp_dir'])) {

		shownav('style', 'styles_admin');
		showsubmenu('styles_admin', array(
			array('admin', 'styles', '0'),
			array('import', 'styles&operation=import', '1'),
			array('cloudaddons_style_link', 'cloudaddons')
		));
		showformheader('styles&operation=import', 'enctype');
		showtableheader('styles_import');
		showimportdata();
		showtablerow('', '', '<input class="checkbox" type="checkbox" name="ignoreversion" id="ignoreversion" value="1" /><label for="ignoreversion"> '.cplang('styles_import_ignore_version').'</label>');
		showsubmit('importsubmit');
		showtablefooter();
		showformfooter();

	} else {

		require_once libfile('function/importdata');
		$restore = !empty($_G['gp_restore']) ? $_G['gp_restore'] : 0;
		if($restore) {
			$_G['gp_dir'] = DB::result_first("SELECT t.directory FROM ".DB::table('common_style')." s LEFT JOIN ".DB::table('common_template')." t ON t.templateid=s.templateid WHERE s.styleid='$restore'");
		}
		if(!empty($_G['gp_dir'])) {
			$renamed = import_styles(1, $_G['gp_dir'], $restore);
		} else {
			$renamed = import_styles($_G['gp_ignoreversion'], $_G['gp_dir']);
		}
		cpmsg(!empty($_G['gp_dir']) ? (!$restore ? 'styles_install_succeed' : 'styles_restore_succeed') : ($renamed ? 'styles_import_succeed_renamed' : 'styles_import_succeed'), 'action=styles', 'succeed');
	}

} elseif($operation == 'copy') {

	$style = DB::fetch_first("SELECT * FROM ".DB::table('common_style')." WHERE styleid='$id'");
	$style['name'] .= '_'.random(4);
	$styleidnew = DB::insert('common_style', array('name' => $style['name'], 'available' => $style['available'], 'templateid' => $style['templateid']), 1);

	$query = DB::query("SELECT * FROM ".DB::table('common_stylevar')." WHERE styleid='$id'");
	while($stylevar = DB::fetch($query)) {
		$stylevar['substitute'] = addslashes($stylevar['substitute']);
		DB::insert('common_stylevar', array('styleid' => $styleidnew, 'variable' => $stylevar['variable'], 'substitute' => $stylevar['substitute']));
	}

	updatecache(array('setting', 'styles'));
	cpmsg('styles_copy_succeed', 'action=styles', 'succeed');

} elseif($operation == 'edit') {

	if(!submitcheck('editsubmit')) {

		if(empty($id)) {
			$stylelist = "<select name=\"id\" style=\"width: 150px\">\n";
			$query = DB::query("SELECT styleid, name FROM ".DB::table('common_style')."");
			while($style = DB::fetch($query)) {
				$stylelist .= "<option value=\"$style[styleid]\">$style[name]</option>\n";
			}
			$stylelist .= '</select>';
			cpmsg('styles_nonexistence', 'action=styles&operation=edit'.(!empty($highlight) ? "&highlight=$highlight" : ''), 'form', array(), $stylelist);
		}

		$style = DB::fetch_first("SELECT s.name, s.templateid, s.extstyle, t.directory FROM ".DB::table('common_style')." s
			LEFT JOIN ".DB::table('common_template')." t ON s.templateid=t.templateid
			WHERE s.styleid='$id'");
		if(!$style) {
			cpmsg('style_not_found', '', 'error');
		}
		list($style['extstyle'], $style['defaultextstyle']) = explode('|', $style['extstyle']);
		$style['extstyle'] = explode("\t", $style['extstyle']);

		$extstyle = $defaultextstyle = array();
		if(file_exists($extstyledir = DISCUZ_ROOT.$style['directory'].'/style')) {
			$defaultextstyle[] = array('', $lang['default']);
			$tpl = dir($extstyledir);
			while($entry = $tpl->read()) {
				if($entry != '.' && $entry != '..' && file_exists($extstylefile = $extstyledir.'/'.$entry.'/style.css')) {
					$content = file_get_contents($extstylefile);
					if(preg_match('/\[name\](.+?)\[\/name\]/i', $content, $r1) && preg_match('/\[iconbgcolor](.+?)\[\/iconbgcolor]/i', $content, $r2)) {
						$extstyle[] = array($entry, '<em style="background:'.$r2[1].'">&nbsp;&nbsp;&nbsp;&nbsp;</em> '.$r1[1]);
						$defaultextstyle[] = array($entry, $r1[1]);
					}
				}
			}
			$tpl->close();
		}

		$stylecustom = '';
		$stylestuff = $existvars = array();
		$query = DB::query("SELECT * FROM ".DB::table('common_stylevar')." WHERE styleid='$id'");
		while($stylevar = DB::fetch($query)) {
			if(array_key_exists($stylevar['variable'], $predefinedvars)) {
				$stylestuff[$stylevar['variable']] = array('id' => $stylevar['stylevarid'], 'subst' => $stylevar['substitute']);
				$existvars[] = $stylevar['variable'];
			} else {
				$stylecustom .= showtablerow('', array('class="td25"', 'class="td24 bold"', 'class="td26"'), array(
					"<input class=\"checkbox\" type=\"checkbox\" name=\"delete[]\" value=\"$stylevar[stylevarid]\">",
					'{'.strtoupper($stylevar['variable']).'}',
					"<textarea name=\"stylevar[$stylevar[stylevarid]]\" style=\"height: 45px\" cols=\"50\" rows=\"2\">$stylevar[substitute]</textarea>",
				), TRUE);
			}
		}
		if($diffvars = array_diff(array_keys($predefinedvars), $existvars)) {
			foreach($diffvars as $variable) {
				$stylestuff[$variable] = array(
					'id' => DB::insert('common_stylevar', array('styleid' => $id, 'variable' => $variable, 'substitute' => ''), 1),
					'subst' => ''
				);
			}
		}

		$tplselect = array();
		$query = DB::query("SELECT templateid, name FROM ".DB::table('common_template')."");
		while($template = DB::fetch($query)) {
			$tplselect[] = array($template['templateid'], $template['name']);
		}

		$smileytypes = array();
		$query = DB::query("SELECT typeid, name FROM ".DB::table('forum_imagetype')." WHERE available='1'");
		while($type = DB::fetch($query)) {
			$smileytypes[] = array($type['typeid'], $type['name']);
		}

		$adv = !empty($_G['gp_adv']) ? 1 : 0;

		shownav('style', 'styles_edit');

		showsubmenu(cplang('styles_admin').' - '.$style['name'], array(
			array('admin', 'styles', 0),
			array('import', 'styles&operation=import', 0),
			array('edit' , 'styles&operation=edit&id='.$id, 1)
		));

?>
<script type="text/JavaScript">
function imgpre_onload(obj) {
	if(!obj.complete) {
		setTimeout(function() {imgpre_resize(obj)}, 100);
	}
	imgpre_resize(obj);
}
function imgpre_resize(obj) {
	if(obj.width > 350) {
		obj.style.width = '350px';
	}
}
function imgpre_update(id, obj) {
	url = obj.value;
	if(url) {
		re = /^http:\/\//i;
		var matches = re.exec(url);
		if(matches == null) {
			url = ($('styleimgdir').value ? $('styleimgdir').value : ($('imgdir').value ? $('imgdir').value : 'static/image/common')) + '/' + url;
		}
		$('bgpre_' + id).style.backgroundImage = 'url(' + url + ')';
	} else {
		$('bgpre_' + id).style.backgroundImage = 'url(static/image/common/none.gif)';
	}
}
function imgpre_switch(id) {
	if($('bgpre_' + id).innerHTML == '') {
		url = $('bgpre_' + id).style.backgroundImage.substring(4, $('bgpre_' + id).style.backgroundImage.length - 1);
		$('bgpre_' + id).innerHTML = '<img onload="imgpre_onload(this)" src="' + url + '" />';
		$('bgpre_' + id).backgroundImage = $('bgpre_' + id).style.backgroundImage;
		$('bgpre_' + id).style.backgroundImage = '';
	} else {
		$('bgpre_' + id).style.backgroundImage = $('bgpre_' + id).backgroundImage;
		$('bgpre_' + id).innerHTML = '';
	}
}
</script>
<br />
<iframe class="preview" frameborder="0" src="<?php echo ADMINSCRIPT;?>?action=styles&preview=yes&styleid=<?php echo $id;?>"></iframe>
<?php

		showtips('styles_tips');

		showformheader("styles&operation=edit&id=$id");
		showtableheader($lang['styles_edit'], 'nobottom');
		showsetting('styles_edit_name', 'namenew', $style['name'], 'text');
		showsetting('styles_edit_tpl', array('templateidnew', $tplselect), $style['templateid'], 'select');
		showsetting('styles_edit_extstyle', array('extstylenew', $extstyle), $style['extstyle'], 'mcheckbox');
		if($extstyle) {
			showsetting('styles_edit_defaultextstyle', array('defaultextstylenew', $defaultextstyle), $style['defaultextstyle'], 'select');
		}
		showsetting('styles_edit_smileytype', array("stylevar[{$stylestuff[stypeid][id]}]", $smileytypes), $stylestuff['stypeid']['subst'], 'select');
		showsetting('styles_edit_imgdir', '', '', '<input type="text" class="txt" name="stylevar['.$stylestuff['imgdir']['id'].']" id="imgdir" value="'.$stylestuff['imgdir']['subst'].'" />');
		showsetting('styles_edit_styleimgdir', '', '', '<input type="text" class="txt" name="stylevar['.$stylestuff['styleimgdir']['id'].']" id="styleimgdir" value="'.$stylestuff['styleimgdir']['subst'].'" />');
		showsetting('styles_edit_logo', "stylevar[{$stylestuff[boardimg][id]}]", $stylestuff['boardimg']['subst'], 'text');

		foreach($predefinedvars as $predefinedvar => $v) {
			if($v !== array()) {
				if(!empty($v[1])) {
					showtitle($v[1]);
				}
				$type = $v[0] == 1 ? 'text' : 'color';
				$extra = '';
				$comment = ($type == 'text' ? $lang['styles_edit_'.$predefinedvar.'_comment'] : $lang['styles_edit_hexcolor']).$lang['styles_edit_'.$predefinedvar.'_comment'];
				if(substr($predefinedvar, -7, 7) == 'bgcolor') {
					$stylestuff[$predefinedvar]['subst'] = explode(' ', $stylestuff[$predefinedvar]['subst']);
					$bgimg = $stylestuff[$predefinedvar]['subst'][1];
					$bgextra = implode(' ', array_slice($stylestuff[$predefinedvar]['subst'], 2));
					$stylestuff[$predefinedvar]['subst'] = $stylestuff[$predefinedvar]['subst'][0];
					$bgimgpre = $bgimg ? (preg_match('/^http:\/\//i', $bgimg) ? $bgimg : ($stylestuff['styleimgdir']['subst'] ? $stylestuff['styleimgdir']['subst'] : ($stylestuff['imgdir']['subst'] ? $stylestuff['imgdir']['subst'] : 'static/image/common')).'/'.$bgimg) : 'static/image/common/none.gif';
					$comment .= '<div id="bgpre_'.$stylestuff[$predefinedvar]['id'].'" onclick="imgpre_switch('.$stylestuff[$predefinedvar]['id'].')" style="background-image:url('.$bgimgpre.');cursor:pointer;float:right;width:350px;height:40px;overflow:hidden;border: 1px solid #ccc"></div>'.$lang['styles_edit_'.$predefinedvar.'_comment'].$lang['styles_edit_bg'];
					$extra = '<br /><input name="stylevarbgimg['.$stylestuff[$predefinedvar]['id'].']" value="'.$bgimg.'" onchange="imgpre_update('.$stylestuff[$predefinedvar]['id'].', this)" type="text" class="txt" style="margin:5px 0;" />'.
						'<br /><input name="stylevarbgextra['.$stylestuff[$predefinedvar]['id'].']" value="'.$bgextra.'" type="text" class="txt" />';
					$varcomment = ' {'.strtoupper($predefinedvar).'},{'.strtoupper(substr($predefinedvar, 0, -7)).'BGCODE}:';
				} else {
					$varcomment = ' {'.strtoupper($predefinedvar).'}:';
				}
				showsetting(cplang('styles_edit_'.$predefinedvar).$varcomment, 'stylevar['.$stylestuff[$predefinedvar]['id'].']', $stylestuff[$predefinedvar]['subst'], $type, '', 0, $comment, $extra);
			}
		}
		showtablefooter();

		showtableheader('styles_edit_customvariable', 'notop');
		showsubtitle(array('', 'styles_edit_variable', 'styles_edit_subst'));
		echo $stylecustom;
		showtablerow('', array('class="td25"', 'class="td24 bold"', 'class="td26"'), array(
			cplang('add_new'),
			'<input type="text" class="txt" name="newcvar">',
			'<textarea name="newcsubst" class="tarea" style="height: 45px" cols="50" rows="2"></textarea>'

		));

		showsubmit('editsubmit', 'submit', 'del');
		showtablefooter();
		showformfooter();

	} else {

		$templateidnew = $_G['gp_templateidnew'];
		$stylevar = $_G['gp_stylevar'];
		$copyids = $_G['gp_copyids'];
		$stylevarbgimg = $_G['gp_stylevarbgimg'];
		$stylevarbgextra = $_G['gp_stylevarbgextra'];
		if(!in_array($_G['gp_defaultextstylenew'], $_G['gp_extstylenew'])) {
			$_G['gp_extstylenew'][] = $_G['gp_defaultextstylenew'];
		}
		$extstylenew = implode("\t", $_G['gp_extstylenew']).'|'.$_G['gp_defaultextstylenew'];

		if($_G['gp_newcvar'] && $_G['gp_newcsubst']) {
			if(DB::result_first("SELECT COUNT(*) FROM ".DB::table('common_stylevar')." WHERE styleid='$id' AND variable='$_G[gp_newcvar]'")) {
				cpmsg('styles_edit_variable_duplicate', '', 'error');
			} elseif(!preg_match("/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/", $_G['gp_newcvar'])) {
				cpmsg('styles_edit_variable_illegal', '', 'error');
			}
			$newcvar = strtolower($_G['gp_newcvar']);
			DB::insert('common_stylevar', array('styleid' => $id, 'variable' => $newcvar, 'substitute' => $_G['gp_newcsubst']));
		}

		DB::query("UPDATE ".DB::table('common_style')." SET name='$namenew', templateid='$templateidnew', extstyle='$extstylenew' WHERE styleid='$id'");
		foreach($stylevar as $varid => $substitute) {
			if(!empty($stylevarbgimg[$varid])) {
				$substitute .= ' '.$stylevarbgimg[$varid];
				if(!empty($stylevarbgextra[$varid])) {
					$substitute .= ' '.$stylevarbgextra[$varid];
				}
			}
			$substitute = @htmlspecialchars($substitute);
			$stylevarids = "'$varid'";
			if(!empty($copyids[$varid])) {
				$stylevarids .= ','.dimplode($copyids[$varid]);
			}
			DB::query("UPDATE ".DB::table('common_stylevar')." SET substitute='$substitute' WHERE stylevarid IN ($stylevarids) AND styleid='$id'");
		}

		if($ids = dimplode($_G['gp_delete'])) {
			DB::query("DELETE FROM ".DB::table('common_stylevar')." WHERE stylevarid IN ($ids) AND styleid='$id'");
		}

		updatecache(array('setting', 'styles'));

		$tpl = dir(DISCUZ_ROOT.'./data/template');
		while($entry = $tpl->read()) {
			if(preg_match("/\.tpl\.php$/", $entry)) {
				@unlink(DISCUZ_ROOT.'./data/template/'.$entry);
			}
		}
		$tpl->close();
		cpmsg('styles_edit_succeed', 'action=styles'.($newcvar && $newcsubst ? '&operation=edit&id='.$id : ''), 'succeed');

	}

}

?>