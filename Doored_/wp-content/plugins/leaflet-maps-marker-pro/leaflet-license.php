<?php // Before trying to crack the plugin, please consider buying a pro license at https://www.mapsmarker.com. I have put hundreds of hours into the development of the plugin and without honest customers I will not be able to continue the development and support. Thanks for your understanding and your honesty! Robert
if (basename($_SERVER["\123CRIPT_F\111\114\105NAME"]) == "leaflet-li\143\145\156se.php") { exit ("\120lease do not\040\141ccess this file\040\144irectly. Thank\163\041<br/><a hr\145\146\075'https:\057\057\167ww.maps\155\141\162ker.com\057\147o'>www.map\163\155\141rker.co\155\074\057a>"); } ?><?php echo "\015\012\074\144iv class=\042\167\162\141p\042>\015\012"; ?><?php $O1u=$lu->Oz; if (array_key_exists("user",$O1u)) { $l1v=$O1u["us\145\162"][0]["e\155\141\151l"]; } else { $l1v=""; } if ( isset ($_POST["maps_ma\162\153\145r_pro_multis\151\164\145_propagate"])) { $O1v= isset ($_POST["\155aps_marker_pro_\154\151\143ense_multisi\164\145"]) ? $_POST["\155\141ps_marker_pro\137\154\151cense_multisit\145"]: ""; if (!wp_verify_nonce($O1v,"maps\137\155\141rker_pro_licen\163\145\137multisite")) exit ("<br/>".__("\123ecurity check f\141\151\154ed - please \143\141\154l this funct\151\157\156 from the \141\143\143ording ad\155\151\156 page!","\154mm").""); if (is_multisite()) { if (current_user_can("a\143\164\151vate_plugins")) { global $wpdb; $blogs=$wpdb->get_results( "S\105\114\105CT `blog_id` F\122\117\115 {$wpdb->blogs}" ,ARRAY_A); if ($blogs) { $l1w=(get_option("leafletmapsmark\145\162\160ro_license_\153\145\171") == TRUE) ? get_option("leafletmaps\155\141\162kerpro_licens\145\137\153ey"): ""; $O1w=(get_option("\154\145\141fletmapsmark\145\162\160ro_license_\154\157\143al_key") == TRUE) ? get_option("le\141\146\154etmapsmarkerp\162\157\137license_loca\154\137\153ey"): ""; foreach ($blogs as $blog) { switch_to_blog($blog["\142\154\157g_id"]); update_option("leafletma\160\163\155arkerpro_lic\145\156\163e_key",$l1w); update_option("\154\145afletmapsmarker\160\162\157_license_loca\154\137\153ey",$O1w); } restore_current_blog(); } echo "<div class=\042\165\160\144ated\042\040\163\164yle=\042\160\141\144ding:5px;\042\076\074p>".__("License key wa\163\040\163uccessful\154\171\040propagated t\157\040\141ll subsit\145\163","\154mm")."\074\057p></div>"; } } } include ("\151nc".DIRECTORY_SEPARATOR."adm\151\156\055header.php"); ?><?php echo "\015\012\015\012\074\150\063 style=\042\146\157nt-size:23px;\042\076"; ?><?php _e("Pro License Sett\151\156\147s","\154\155\155"); ?><?php echo "</h3>\015\012\015\012<div \143\154\141ss=\042wr\141\160\042>\015\012\015\012\011"; ?><?php if (O3() === TRUE) { echo "<p><div class=\042\165\160dated\042\040\163\164yle=\042\160\141\144ding:10px\073\155\141rgin:0px;\042\076".sprintf(__("\131ou have ins\164\141\154led Leaflet M\141\160\163 Marker Pro\040\157\156 a local\150\157\163t instanc\145\056\040Enterin\147\040a license k\145\171\040here i\163\040\156ot mand\141\164\157ry but r\145\143\157mmende\144\040\141s this \141\154\163o allow\163\040you to <a \150\162\145f=\042\045\061s\042 ta\162\147\145t=\042\137\142lank\042\076\157\160en sup\160\157\162t tic\153\145\164s</a>\056\040Please b\145\040aware th\141\164\040once \171\157u use th\145\040plugin \157\156 a live \144\157main, e\156\164ering a\040\154icense\040\153ey is m\141\156datory!","\154\155m"),"\150ttps://www.mapsm\141\162\153er.com/helpdes\153")."</div></p>"; } ?><?php echo "\015\012\015\012\011"; ?><?php if ($lu->l18 && ! isset ($_POST["\155\141ps_marker_pro_reg\151\163\164er_free"])):; ?><?php echo "\015\012\011\011<div i\144\075\042message\042\040\143lass=\042\165\160\144ated\042\076\015\012\011\011\011\074p><b>"; ?><?php echo $lu->l18; ?><?php echo "</b></p>\015\012\011\011</div>\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011"; ?><?php if (!$lu->l18 && $lu->Oy && ! isset ($_POST["\155aps_marker_\160\162\157_register_fre\145"])):; ?><?php echo "\015\012\011\011<div id=\042\155\145ssage\042\040\143\154ass=\042\165\160\144ated\042\076\015\012\011\011\011\074p><b>"; ?><?php echo $lu->Oy; ?><?php echo "\074\057b></p>\015\012\011\011</div>\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011"; ?><?php if ($O17 && !$lu->Oy):; ?><?php echo "\015\012\011\011\074\144\151v id=\042\155\145\163sage\042\040\143\154ass=\042\165\160dated\042>\015\012\011\011\011\074\160><b>"; ?><?php _e("Your licen\163\145\040was activat\145\144\040successfull\171\041","lmm"); ?><?php echo "\074\057b></p>\015\012\011\011</div>\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011"; ?><?php if (empty($O15) && isset ($l15)):; ?><?php echo "\015\012\011\011\074div id=\042\155\145ssage\042 c\154\141\163s=\042u\160\144\141ted\042\076\015\012\011\011\011\074p><b>"; ?><?php _e($l15); ?><?php echo "\074\057b></p>\015\012\011\011</div>\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011\074\146orm metho\144\075\042post\042\076\015\012\011"; ?><?php wp_nonce_field("map\163\137\155arker_pro_lic\145\156\163e","maps_\155\141\162ker_pro_license"); ?><?php echo "\015\012\011\011"; ?><?php if (!$lu->lx):; ?><?php echo "\015\012\011\011\011<div cla\163\163\075\042cert\151\146\151cate-rtl\042\076\074img src=\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "\151nc/img/icon-c\145\162\164ificate.png\042\040\167idth=\042\064\070\042 heig\150\164\075\04238\042\040\141lt=\042\151\143\157n cert\151\146\151cate\042\076\074/div>\015\012\011\011\011\074\144\151v styl\145\075\042font-s\151\172\145:16px;\146\157\156t-weig\150\164\072bold;\042\076"; ?><?php _e("\117\160tion A: activat\145\040\141n unexpirin\147\040\154icense key","lmm"); ?><?php echo "\074\057div>\015\012\011\011\011<p \163\164\171le=\042ma\162\147\151n:0.4em 0\040\061\145m 0;\042\076"; ?><?php echo sprintf(__("\107et an unexpiri\156\147\040license key\040\141t %1\044s a\156\144\040activate \164\150\145 license \153\145\171 below:","lmm"),"\074\141 href=\042\150\164\164ps://www.map\163\155\141rker.com/o\162\144\145r\042 tar\147\145\164=\042_\142\154\141nk\042\076\155\141psmarke\162\056com/order\074\057\141>"); ?><?php echo "</p>\015\012\011\011"; ?><?php endif; ?><?php echo "\015\012\011\011<p>\015\012\011\011"; ?><?php if ($lu->lx) { if ($lu->Oy) { $l1x="\142\141\143kground:#ff\060\060\0600;color:#00\060\060\0600;"; } else { $l1x="background:#00FF\060\060\073color:#000\060\060\060;"; } } else { $l1x=""; } if ($lu->lx) { $O1x=__("update","lmm"); } else { $O1x=__("activate","lmm"); } if (current_user_can("activ\141\164\145_plugins")) { $lx=$lu->lx; $l1y=""; } else { $lx=__("visibl\145\040\146or admins on\154\171","lmm"); $l1y="disabled=\042\144\151sabled\042"; } ?><?php echo "\015\012\011\011<b>"; ?><?php _e("\114icense Key","lmm"); ?><?php echo "</b> <\151\156\160ut name=\042\154\145\141fletmapsm\141\162\153erpro_lice\156\163\145_key\042\040\164\171pe=\042\164\145xt\042 st\171\154\145=\042w\151\144\164h:265px;"; ?><?php echo $l1x; ?><?php echo "\042 value\075\042"; ?><?php echo $lx; ?><?php echo "\042 /> \074\151\156put type=\042\163\165bmit\042\040\143\154ass=\042\142\165\164ton-prim\141\162\171\042 v\141\154\165e=\042"; ?><?php echo $O1x; ?><?php echo "\042\040"; ?><?php echo $l1y; ?><?php echo "\040\057>\015\012\011\011\074/p>\015\012\011\074/form>\015\012\015\012\011\074\150\162 noshade\040\163\151ze=\042\061\042 style=\042\155\141rgin:20px\040\060;border-to\160\072\061px sol\151\144\040#66666\066\073\042 />\015\012\015\012\011"; ?><?php if (!$lu->lx && !l11()):; ?><?php echo "\015\012\011\011\015\012\011\011"; ?><?php if (!empty($O15)):; ?><?php echo "\015\012\011\011\011<div id=\042\155\145\163sage\042\040\143\154ass=\042\145\162ror\042>\015\012\011\011\011\011"; ?><?php foreach ($O15 as $e):; ?><?php echo "\015\012\011\011\011\011\011<p><b>"; ?><?php _e($e); ?><?php echo "</b\076\074/p>\015\012\011\011\011\011"; ?><?php endforeach; ?><?php echo "\015\012\011\011\011\074/div>\015\012\011\011"; ?><?php endif; ?><?php echo "\015\012\011\015\012\011\011"; ?><?php $O1y=get_option("leafletmapsmar\153\145\162pro_license_\153\145\171_trial"); if ($O1y != NULL) { $l1z="display:none;"; $O1z="\074p><div class\075\042\165pdated\042\040\163tyle=\042c\154\145\141r:both;pad\144\151\156g:10px;\042\076".sprintf(__("\131ou already sta\162\164\145d a free 30-d\141\171\055trial for\040\164\150is site -\040\146\162ee trial\040\154\151cense ke\171\072 %1\044s","\154\155\155"),$O1y)."\074/div></p>"; $l20="\144isabled=\042d\151\163\141bled\042"; } else { $l1z=""; $O1z=""; $l20=""; } ?><?php echo "\015\012\011\011\015\012\011\011<d\151\166\040class=\042\141\166atar-person\141\154\151zed-rtl\042\076\074img src\075\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "\151nc/img/avatar-\160\145\162sonalized.png\042\040width=\0424\070\042\040height=\042\064\070\042 al\164\075\042icon a\166\141\164ar\042\076\074/div>\015\012\011\011<div s\164\171\154e=\042\146\157\156t-size:\061\066px;font-w\145\151\147ht:bold\073\042>"; ?><?php _e("Option B: get\040\141\040personali\172\145\144 trial licen\163\145\040key","lmm"); ?><?php echo "</d\151\166\076\015\012\011\011<p>"; ?><?php echo __("Yo\165\040\143an test <i>Map\163\040\115arker Pro</i\076\040\146or 30 days\040\146or free witho\165\164\040any obli\147\141\164ions.","\154\155m"); ?><?php echo "\074\057p>\015\012\011\011"; ?><?php echo $O1z; ?><?php echo "\015\012\011\011<div id=\042\162\145\147ister_free\137\164\162ial_pers\157\156\141lized\042\040\163tyle=\042"; ?><?php echo $l1z; ?><?php echo "\042>\015\012\011\011\011<form meth\157\144\075\042po\163\164\042>\015\012\011\011\011<input\040\164\171pe='hid\144\145\156' name=\047\155aps_marker\137\160\162o_regist\145\162\137free' va\154\165\145='y' />\015\012\011\011\011\011\074table\040\163\164yle=\042\143\154ear-both\073\155argin-top:\061\065px;\042>\015\012\011\011\011\011\011<tr>\015\012\011\011\011\011\011\011<\164\144><b>"; ?><?php _e("First name","lmm"); ?><?php echo "\074\057b></td>\015\012\011\011\011\011\011\011<td><input n\141\155\145=\042ma\160\163\137marker_pr\157\137\146irst_na\155\145\042 type=\042\164\145xt\042\040\163\164yle=\042\167\151dth:291px;\042\040value=\042"; ?><?php echo O14("maps\137\155\141rker_pro_fi\162\163\164_name"); ?><?php echo "\042 /></td>\015\012\011\011\011\011\011\074/tr>\015\012\011\011\011\011\011\074tr>\015\012\011\011\011\011\011\011\074td><b>"; ?><?php _e("Last name","lmm"); ?><?php echo "\074\057\142></td>\015\012\011\011\011\011\011\011<td><input \156\141\155e=\042ma\160\163\137marker_p\162\157\137last_nam\145\042 type=\042\164\145\170t\042 \163\164\171le=\042\167\151dth:291px;\042\040\166alue=\042"; ?><?php echo O14("\155aps_marker_pro_la\163\164\137name"); ?><?php echo "\042 /></t\144\076\015\012\011\011\011\011\011</tr\076\015\012\011\011\011\011\011<tr>\015\012\011\011\011\011\011\011<td><b\076"; ?><?php _e("\105-mail","lmm"); ?><?php echo "</b>\074\057td>\015\012\011\011\011\011\011\011\074td><input na\155\145\075\042map\163\137\155arker_pr\157\137\145mail\042\040\164ype=\042\164\145\170t\042 \163\164\171le=\042\167\151dth:291px;\042\040\166alue=\042"; ?><?php echo O14("maps_marker\137\160\162o_email"); ?><?php echo "\042 /><\057\164\144>\015\012\011\011\011\011\011\074\057tr>\015\012\011\011\011\011\011\074tr>\015\012\011\011\011\011\011\011<td></td>\015\012\011\011\011\011\011\011<td\076\074input type\075\042checkbox\042\040\156ame=\042\155\141ps_marker_\160\162o_tos\042\040\166alue=\042\131\145s\042 che\143\153ed=\042c\150\145\143ked\042\040\057> "; ?><?php echo sprintf(__("I \150\141\166e read the <a\040\150\162ef=\042%\061\044s\042 tar\147\145\164=\042_bla\156\153\042>Terms o\146\040\123ervice\074\057a> and <a \150\162\145f=\042%\062\044s\042 targ\145\164\075\042_\142\154\141nk\042\076\120rivacy Pol\151\143\171</a>.","\154\155\155"),"\150ttps://www.mapsmar\153\145\162.com/terms-o\146\055\163ervices","\150ttps://www.ma\160\163\155arker.com/priv\141\143\171-policy"); ?><?php echo "\074\057td>\015\012\011\011\011\011\011\074/tr>\015\012\011\011\011\011"; ?><?php echo "\074\164\162><td></td><\164\144\076<input type=\042\163\165bmit\042\040\143\154ass=\042\142\165\164ton-prima\162\171\042 value\075\042".__("\123\164art personal\151\172\145d free 30-day\040\164\162ial period","lmm")."\042\040".$l20." /></td></tr>"; ?><?php echo "\015\012\011\011\011\011\074\057table>\015\012\011\011\011</\146\157\162m>\015\012\011\011</div><!--\162\145\147ister_f\162\145\145_trial_\160\145\162sonalize\144\040div-->\015\012\011\015\012\011\011\074hr nosha\144\145\040size=\042\061\042 style\075\042margin:20p\170\0400;border-t\157\160\0721px so\154\151\144 #6666\066\066;\042 />\015\012\011\011\015\012\011\011<\144\151v class=\042\141\166atar-a\156\157nymous-rt\154\042><img s\162\143\075\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "inc/im\147\057\141vatar-anony\155\157\165s.png\042\040\167idth=\0423\064\042 height=\042\063\064\042 alt=\042\151\143on avat\141\162\040anonym\157\165\163\042></\144\151\166>\015\012\011\011<div s\164\171\154e=\042\146\157\156t-weigh\164\072bold;\042\076"; ?><?php _e("\117\160tion C: get an\040\141\156onymous tria\154\040\154icense ke\171","\154\155\155"); ?><?php echo "\074/div>\015\012\011\011"; ?><?php echo $O1z; ?><?php echo "\015\012\011\011\074\144\151v id=\042\162\145\147ister_free\137\164\162ial_anony\155\042\040style=\042"; ?><?php echo $l1z; ?><?php echo "\042\076\015\012\011\011\011\074form metho\144\075\042post\042\076\015\012\011\011\011\074input ty\160\145\075'hidden\047\040name='maps\137\155\141rker_pr\157\137\162egister\137\146\162ee_anony\155\047\040value=\047\171' />\015\012\011\011\011<s\160\141\156 id=\042\157\160tion-b-hi\144\145\042><a s\164\171\154e=\042\164\145xt-decorat\151\157\156:none;\143\165rsor:poin\164\145\162;\042\076"; ?><?php _e("C\154\151\143k here for mor\145\040\151nformation","lmm"); ?><?php echo "\074\057a></span>\015\012\011\011\011<d\151\166\040id=\042o\160\164\151on-b-show\042\040\163tyle=\042\144\151splay:none\073\042>\015\012\011\011\011"; ?><?php echo sprintf(__("\120\154ease note that \151\156\040contrast to \141\040\160ersonalize\144\040\164rial lice\156\163\145 you will\040\156\157t be ab\154\145\040to <a h\162\145\146=\042%\061\163\042 targ\145\164\075\042_b\154\141\156k\042\076\157\160en supp\157\162\164 tick\145\164\163</a> a\156\144\040get a \162\145\155inder w\150\145n your tri\141\154\040licen\163\145\040has ex\160\151\162ed!","\154mm"),"https://www.mapsma\162\153\145r.com/helpdesk"); ?><?php echo "\015\012\011\011\011\074\160><input ty\160\145\075\042chec\153\142\157x\042 n\141\155\145=\042map\163\137\155arker_p\162\157\137tos\042\040\166alue=\042\131\145\163\042 c\150\145\143ked=\042\143\150ecked\042\040\057> "; ?><?php echo sprintf(__("I h\141\166\145 read the <a \150\162\145f=\042%1\044\163\042 target=\042\137\142lank\042>Te\162\155\163 of Servi\143\145\074/a> and\040\074a href=\042\045\062\044s\042\040\164arget=\042\137\142lank\042>\120\162\151vacy Po\154\151\143y</a>.","lmm"),"\150\164tps://www.mapsm\141\162\153er.com/term\163\055\157f-service\163","h\164\164\160s://www.mapsmark\145\162\056com/privacy-p\157\154\151cy"); ?><?php echo "\074\057p>\015\012\011\011\011"; ?><?php echo "\074input type=\042\163\165\142mit\042 cl\141\163\163=\042but\164\157\156-primary\042\040\166alue=\042".__("\123\164art anonymous fr\145\145\04030-day tria\154\040\160eriod","lmm")."\042\040".$l20."\040/>"; ?><?php echo "\015\012\011\011\011</\146\157\162m>\015\012\011\011\011</div>\015\012\011\011</div\076\074!--register\137\146\162ee_trial\137\141\156onym di\166\055\055>\015\012\011\015\012\011\011\074hr nosha\144\145\040size=\042\061\042 style\075\042margin:20p\170\0400;border-\164\157\160:1px so\154\151\144 #666\066\0666;\042 /\076\015\012\011\015\012\011\011<\144\151v class=\042\151\143on-loc\141\154host-rtl\042\076<img src\075\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "inc/img/icon-\154\157\143alhost.png\042\040\167idth=\042\063\064\042 heig\150\164\075\04234\042\040\141lt=\042\151\143on localho\163\164\042></div\076\015\012\011\011\074\144iv styl\145\075\042font-w\145\151\147ht:bold\073\042>"; ?><?php _e("\117\160tion D: star\164\040\141n unlimited, \141\156\157nymous tes\164\040\157n a loca\154\150\157st install\141\164\151on","\154mm"); ?><?php echo "\074\057div>\015\012\011\011"; ?><?php echo sprintf(__("\111\146 you install Le\141\146\154et Maps Mar\153\145\162 Pro on a\040\154\157calhost i\156\163\164allation\040\050<a href=\042\045\061s\042 t\141\162\147et=\042\137\142lank\042>\163\145\145 availab\154\145\040packag\145\163\074/a>), \162\145\147isterin\147\040a free 30-\144\141\171 trial\040\154icense key\040\151s not man\144\141\164ory an\144\040the plugi\156\040can also\040\142e tested \167\151thout ti\155\145\040limit\141\164ion.","lmm"),"\150\164\164p://en.wikipedi\141\056\157rg/wiki/Lis\164\137\157f_AMP_pack\141\147\145s"); ?><?php echo "\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011<p>\015\012\011"; ?><?php if (la($Oa=l0,$lb=FALSE) === TRUE) { if (($lu->lx) && ($l1v != NULL)) { echo "<p><strong\076".__("\114icense regis\164\145\162ed to","\154\155m").":</strong> ".$O1u["customer"]["name"]."\074/p>"; } if ((la($Oa=FALSE,$lb=TRUE) === TRUE) && (la() === TRUE)) { if (!l11()) { $lz=$lu->Oz["licen\163\145\137expires"]; $O20=abs(floor((time()-$lz)/(074*074*030))); if ($lz != NULL) { echo "<strong>".__("\106\162\145e trial lice\156\163\145 is valid unt\151\154\072","\154mm")."</strong> ".date("\144\057m/Y",$lz)." (".$O20."\040".__("day\163\040\154eft","lmm")."\051\040<span style=\042\146\157nt-family:seri\146\073\042>&rarr;<\057\163\160an> <a st\171\154\145=\042te\170\164\055decorat\151\157\156:none;\042\040\150ref=\042\150\164tps://www.\155\141\160smarker.\143\157\155/order\042\040\164arget=\042\137\142lank\042\076".__("\143\154\151ck here to g\145\164\040a non-expiri\156\147\040license ke\171","lmm")."</a>"; } } else { $lz=$lu->Oz["\144ownload_access_e\170\160\151res"]; $O20=abs(floor((time()-$lz)/(074*074*030))); echo "<\163\164\162ong>".__("Access t\157\040\160lugin update\163\040\141nd support a\162\145\141 valid unt\151\154\072","lmm")."</strong> ".date("d/m/Y",$lz)."\040(".$O20."\040".__("days left","lmm")."\051"; } } else if ((la($Oa=FALSE,$lb=TRUE) === TRUE) && (la() === FALSE)) { $l5=get_option("\154\145afletmapsmar\153\145\162_version_pro"); echo "\074\144\151v id='messag\145\047\040class='err\157\162\047 style='pa\144\144\151ng:5px;'>\074\163\164rong>".__("\127\141\162ning: your \141\143\143ess to updat\145\163\040and suppo\162\164\040for Leaf\154\145\164 Maps Ma\162\153\145r Pro \150\141\163 expire\144\041","\154mm")."\074/strong><br/>"; if ($lc>$l5) { echo __("Latest avail\141\142\154e version:","\154mm")."\040<a href='https://\167\167\167.mapsmarker\056\143\157m/v".$lc."\160' target='_bl\141\156\153' title='".esc_attr__("click to sh\157\167\040release note\163","lmm")."\047>".$lc."\074\057a> "."(<a hre\146\075\047www.mapsmar\153\145\162.com/changelo\147\057\160ro/' targ\145\164\075'_blank'>".__("sho\167\040\141ll available c\150\141\156gelogs","\154\155\155")."\074/a>)<br/>"; } echo sprintf(__("\131ou can continue\040\165\163ing version\040\045\163 without a\156\171\040limitatio\156\163\056 Neverth\145\154\145ss you w\151\154\154 not be\040\141ble to get \165\160\144ates i\156\143\154uding bu\147\146\151xes, new\040\146\145atures\040\141\156d optim\151\172\141tions \141\163\040well a\163\040\141ccess \164\157 our suppo\162\164\040syste\155\056\040","lmm"),$l5)."</\144\151\166>"; if (current_user_can("activate_\160\154\165gins")) { echo "\074a href=\042htt\160\163\072//www.mapsmar\153\145\162.com/renew\042\040\164arget=\042\137\142lank\042  s\164\171\154e=\042\146\157\156t-size:1\062\065%;font-wei\147\150\164:bold;\042\076\046raquo; ".__("\160lease click h\145\162\145 to renew you\162\040\141ccess to p\154\165\147in updates\040\141\156d suppor\164","\154mm")."\040&laquo;</a>"; echo "\074p>".__("\111\155\160ortant: please\040\143\154ick the upd\141\164\145 button n\145\170\164 to the l\151\143\145nse key \141\146\164er purc\150\141\163ing a \162\145\156ewal to\040\146inish your\040\157\162der.","\154\155m")."\074\057p>"; } else { echo "\074\163pan style=\042\146\157nt-size:125%;f\157\156\164-weight:bol\144\073\042>".sprintf(__("Please \143\157\156tact your adm\151\156\151strator (%1s\051\040to renew your \141\143\143ess to pl\165\147\151n update\163\040\141nd supp\157\162\164.","lmm"),"\074\141\040href=\042\155\141\151lto:".get_bloginfo("admin_email")."\077subject=".esc_attr__("Maps Ma\162\153\145r Pro - renewa\154\040\146or access to\040\160\154ugin upda\164\145\163 and supp\157\162\164 needed","\154\155m")."\042\076".get_bloginfo("\141\144min_email")."</a>")."\074/span>"; } } } else if (($lu->lx) && (la($Oa=FALSE,$lb=TRUE) === TRUE) && (la($Oa=l0,$lb=FALSE) === FALSE)) { if (current_user_can("activate_p\154\165\147ins")) { $l21="\150\164tps://www.maps\155\141\162ker.com/upda\164\145\163-pro/arch\151\166\145"; echo "<div id='message\047\040class='error' st\171\154\145='padding:5p\170\073\047><stron\147\076".sprintf(__("\105rror: This versi\157\156\040of the plu\147\151\156 was releas\145\144\040after yo\165\162\040download\040\141\143cess exp\151\162\145d. Plea\163\145\040<a href\075\042%1\044s\042\040\164arget=\042\137\142lank\042\076\162enew your \144\157\167nload a\156\144 support a\143\143\145ss</a>\040\157\162 <a h\162\145\146=\042\045\062\044s\042\040\164arget=\042\137\142lank\042\076\144owngrade \164\157 your pre\166\151ous valid\040\166ersion</\141\076.","l\155\155"),"https\072\057\057www.mapsm\141\162\153er.com/rene\167",$l21)."</\163\164\162ong></div>"; } else { echo "\074\144\151v id='messa\147\145\047 class='erro\162\047\040style='pa\144\144\151ng:5px;'>\074\163\164rong>".sprintf(__("\105rror: This vers\151\157\156 of the plug\151\156\040was releas\145\144\040after you\162\040\144ownlo\141\144\040access \145\170\160ired. P\154\145\141se contac\164\040your admini\163\164\162ator (%\061\163\051 to re\156\145\167 your \141\143\143ess to\040\160\154ugin up\144\141\164es and\040\163\165pport \157\162\040to dow\156\147\162ade t\157\040your prev\151\157\165s vali\144\040\166ersio\156\056","lmm"),"<a h\162\145\146\075\042\155ailto:".get_bloginfo("\141dmin_email")."?subject=".esc_attr__("\115\141\160s Marker Pro\040\055\040renewal f\157\162\040access to \160\154\165gin update\163\040\141nd suppo\162\164\040needed","lmm")."\042\076".get_bloginfo("\141\144min_email")."</a>")."\074/strong></div>"; } } ?><?php echo "\015\012\011<\057\160\076\015\012\015\012\011"; ?><?php if (current_user_can("activate_\160\154\165gins")) { if (($lu->lx) && ($l1v != "\141\156onym@mapsma\162\153\145r.com")) { echo "\074\160\076".sprintf(__("P\154\145\141se note that a \154\151\143ense is b\157\165\156d to the d\157\155\141in it was a\143\164\151vated on\041\040If you wan\164\040to use you\162\040\154icense \157\156\040another\040\144\157main, p\154\145\141se foll\157\167\040the tu\164\157\162ial at\040\074a href=\042\045\061\044s\042\040target=\042\137\142lank\042\076\0452\044s\074\057a>","lmm"),"\150\164tps://www.mapsmark\145\162\056com/transfe\162\042\040style=\042\164\145xt-decorat\151\157\156:none;","\155apsmarker.com/trans\146\145\162")."</p>"; echo "\074\160\076".sprintf(__("If you have a\156\171\040issues with \171\157\165r license, <\141\040\150ref=\042\045\061\044s\042 \164\141\162get=\042\137\142\154ank\042\076\160lease ope\156\040\141 new sup\160\157\162t ticke\164\074/a>!","\154mm"),"https://www.mapsma\162\153\145r.com/store\057\143\165stomers/in\144\145\170.php?task=\154\157\147in&email_\154\157\147in=".$l1v."\042 style=\042tex\164\055\144ecoration:no\156\145\073")."<\057\160\076"; } } ?><?php echo "\015\012\015\012\011"; ?><?php if (is_multisite()) { if (current_user_can("\141ctivate_plugi\156\163")) { echo "\074\150r noshade size=\042\061\042 style=\042\142\157rder-top:1px\040\163\157lid #6666\066\066\073\042 /\076\074h3 style=\042\146\157nt-size\072\061\070px;\042\076".__("\127\157\162dPress Multi\163\151\164e settings","\154\155m")."</h3>"; echo "<p>".__("Use the button \142\145low to propaga\164\145\040the licen\163\145\040key ente\162\145\144 above t\157\040\141ll Word\120\162\145ss Mult\151\163\151te sub\163\151\164es.","lmm")."</p>"; if ((SUBDOMAIN_INSTALL == TRUE) || is_plugin_active("wordpress-mu-d\157\155\141in-mapping/do\155\141\151n_mapping.ph\160")) { echo "<p>".__("Impo\162\164\141nt: you seem \164\157\040be using di\146\146\145rent domai\156\163\040for your\040\163\165bsites.\040\120\154ease ma\153\145\040sure t\150\141\164 your l\151\143\145nse key\040\151\163 valid\040\146\157r the n\165\155\142er of d\157\155\141ins yo\165\040want to us\145\040it on and \165\160\144ate the\040\154icense key\040\157n each su\142\163\151te dir\145\143\164ly fir\163\164 before p\162\157pagating \164\150e licens\145\040key! Thi\163\040will ens\165\162e that \141\154l these\040\144omains\040\141re reg\151\163tered o\156\040your cu\163\164omer pr\157\146ile on\040\155apsmark\145\162.com -\040\167hich w\151\154l resul\164\040in a \166\141lid li\143\145nse va\154\151dation\040\157n sub\163\151tes af\164\145r pro\160\141gatin\147\040the li\143\145nse \153\145y.","lmm")."\074/p>"; } echo "\074form metho\144\075\042post\042\076"; wp_nonce_field("\155\141ps_marker_p\162\157\137license_multi\163\151\164e","\155\141ps_marker_pro_lic\145\156\163e_multisite"); echo "\074input type=\042\143\150eckbox\042 n\141\155\145=\042maps\137\155\141rker_pro_m\165\154\164isite_pro\160\141\147ate\042 \057\076 <label fo\162\075\042maps_m\141\162\153er_pro_m\165\154\164isite_p\162\157\160agate\042\076".__("Y\145\163\040I want to pro\160\141\147ate the lice\156\163\145 key to al\154\040\163ubsites","lmm")."\074/label>"; echo "\040<input type=\042\163\165bmit\042 cl\141\163\163=\042butt\157\156\055primary\042\040\166alue=\042".__("\165\160date","lmm")."\042 />"; } } ?><?php echo "\015\012</div>\015\012\074\163cript type=\042\164\145xt/javascrip\164\042\076\015\012\057\057info: show\040\141\156onymou\163\040\162egiste\162\040\142utton\015\012\050function\050\044) \173\015\012\011\044('#o\160\164\151on-b-hi\144\145\047).clic\153\050\146unctio\156\050\145) \173\015\012\011\011\011\044('#option\055\142\055hide'\051\056hide();\015\012\011\011\011\044\050'#opti\157\156-b-show'\051\056show();\015\012\011});\015\012\175)(jQu\145\162y)\015\012\074\057scrip\164\076\015\012\074\041--wr\141\160-->\015\012"; ?><?php include ("\151nc".DIRECTORY_SEPARATOR."\141\144min-footer.php"); ?>