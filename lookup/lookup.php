<?php

require_once (dirname(__FILE__) . '/lib.php');

$citations=array(
'Mammalia 62:387',
'J. Mammal 83:825',
'Fieldiana Zool., n.s., 70:37',
'Am. Mus. Novit. 3466:11',
'Mem. Fund. La Salle Cienc.  Nat. 159-160:9',
'Mamm. Biol. 69:146',
'J. Mammal.  87:224',
'J. Mammal.  87:229',
'J. Mammal. 77:42',
'Rec. Aust. Mus. 57:334',
'Rec. W. Aust. Mus. 20:125',
'Aust. J. Zool.  46:5',
'Mem. Qld. Mus. 45:613',
'Mem. Qld.  Mus. 37:312',
'Aust. J. Zool.  47:220',
'J. Zool. 264:117',
'Aust. Mammal. 18:42',
'Aust. Mammal. 18:40',
'J. Mammal. 85:826',
'Aust. J. Zool.  50:17',
'Mammalia  59:66',
'Aust. J. Zool. 40:621',
'Aust. J. Zool. 40:619',
'Aust. J. Zool. 40:618',
'Aust. Mammal. 15:18',
'Bull. Am. Mus. Nat. Hist. 63:2',
'Fieldiana Zool. n.s. 85:211',
'Proc. Biol. Soc. Wash. 117:253',
'Fieldiana Zool. n.s. 90:149',
'Bull. Nat. Hist. Mus. Lond.  (Zool.) 65:156',
'Am. Mus. Novit. 3067:2',
'Mammalia 64:42',
'Mastozool. Trop. 2:7',
'Proc. Biol. Soc. Wash. 114:17',
'Int. J. Primatol.  21:960',
'Int. J. Primatol. 21:960',
'Int. J. Primatol.  21:1001',
'Int. J. Primatol. 27:382',
'Int. J. Primatol. 27:381',
'Primate Eye 63:26',
'Int. J. Primatol. 21:982',
'Int. J. Primatol. 27:383',
'Int. J. Primatol.  21:977',
'Primate Report 71:18',
'BMC Evolutionary Biology 6(17) epub, page not  available',
'BMC Evolutionary Biology 6(17) epub, page not available',
'BMC Evolutionary Biology 6(17)epub, page not available',
'Am. J. Primatol. 67:373',
'Int. J. Primatol. 21:934',
'Anthropol. Pap. Amer. Mus. Nat.  Hist. 78:8',
'In Kingdon, Kingdon Field Guide to African  Mammals, p. 106',
'Int. J. Primatol. 27:465',
'Neotropical  Primates 8:7',
'Goeldiana  Zoologia 22:8',
'Neotropical  Primates 8:3',
'Bol. Mus. Para. Emilio Goeldi,  ser. Zool. 9:325',
'Goeldiana  Zoologia 14:6',
'Goeldiana Zoologia 12:4',
'Goeldiana Zoologia 21:6',
'Goeldiana Zoologia 15:4',
'Zootaxa 1200:2',
'Neotropical  Primates 10 (Suppl.):24',
'Rev. Bras. Zool. 16:534',
'Neotropical  Primates 10 (Suppl.):15',
'In Jones et al., Science  308:1161',
'Int. J. Primatol 26:980',
'Asian Primates 4:1',
'Kingdon Field Guide to African Mammals, p. 55',
'Zool. Garten NF 67:165',
'Rafﬂes Bulletin of Zoology   43:15',
'Bonn. Zool.   Beitr. 46:116',
'Am. Mus.  Novit. 3509:7',
'Am. Mus. Novit. 3396:9',
'Am. Mus. Novit. 3382:6',
'Adaptive Radiation of Blind Subterranean Mole Rats, p. 23',
'Adaptive Radiation of Blind Subterranean Mole Rats, p. 23',
'Adaptive Radiation  of Blind Subterranean  Mole Rats, p. 23',
'Adaptive Radiation  of Blind  Subterranean  Mole Rats, p. 23',
'Zoology in the Middle  East 33:157',
'Proc. Biol.   Soc. Wash. 114:974',
'Am. Mus. Novit. 3087:39',
'Fieldiana Zool. n.s. 90:165',
'Am. Mus. Novit. 3087:37',
'Proc. Biol. Soc. Wash.  118:453',
'Fieldiana Zool. n.s. 85:235',
'Proc. Biol.  Soc. Wash. 118:866',
'Fieldiana Zool. n.s. 85:182',
'Bonn. Zool. Beitr. 50:8',
'J. Nat. Hist. 33:301',
'Russian J. Theriol. 1:118',
'Proc. Biol. Soc. Wash. 115:491',
'J. Mammal. 85:1190',
'Occ. Pap. Mus. Texas Tech.Univ. 231:i, 7',
'Mamm. Biol. 66:230',
'J. Mammal. 80:788',
'Bonn. Zool. Beitr. 47:220',
'Z. Säugetierk. 65:218',
'J. Mammal. 81:844',
'J. Mammal. 86:465',
'Comun. Zool. Hist. Nat. Mus. Montevideo12:2',
'In Malygin et al., Zool. Zhur.  73:203',
'J. Mammal. 77:929',
'Bonn. Zool. Beitr. 47:235',
'Bonn. Zool. Beitr. 47:233',
'Occ. Pap. Sam Noble Oklahoma Mus. Nat. Hist. 9:9',
'Bonn. Zool. Beitr. 47:232',
'Occ. Pap. Sam Noble Oklahoma Mus. Nat. Hist. 9:7',
'Occ. Pap. Sam Noble Oklahoma Mus. Nat. Hist. 9:3',
'Bonn. Zool. Beitr. 47:232',
'Rev. Bras. Zool. 20:301',
'Bull. Nat. Hist. Mus. Lond. 63:124',
'Acta Theriol. 47:310',
'Am. Mus. Novit. 3280:4',
'Am. Mus. Novit. 3280:2',
'Rev. Chilena Hist. Nat. 71:362',
'Fieldiana Zool. n.s. 75:2',
'Bull. Am. Mus. Nat. Hist. 263:78',
'Bull. Am. Mus. Nat. Hist. 244:105',
'Bull. Am. Mus. Nat. Hist. 244:98',
'Bull. Am. Mus. Nat. Hist. 263:81',
'J. Mammal. 86:874',
'Am. Mus. Novit. 3256:10',
'2nd Congreso Argentino de Zoonosis y 1st Congreso Argentino y Latinamericano de Enfermedades Emergentes, Buenos Aires, p. 243',
'Arquivos de Museu Nacional (Rio de Janeiro) 63:116',
'Arquivos de Museu Nacional (Rio de Janeiro) 63:119',
'Z. Säugetierk. 63:98',
'Am. Mus. Novit. 3478:14',
'In Brooks et al., Occ. Pap. Mus. Texas Tech Univ. 241:3',
'Caribbean J. Sci. 37:182',
'Bull. Am. Mus. Nat. Hist. 236:233',
'Arquivos de Museu Nacional (Rio de Janeiro) 60:292',
'Mamm. Biol. 68:84',
'Arquivos de Museu Nacional (Rio de Janeiro) 60:290',
'Zool. J. Linn. Soc. 125:454',
'Bull. Am. Mus. Nat. Hist.236:100',
'Fieldiana Zool. n.s. 79:23',
'Bonn. Zool. Beitr. 47:244',
'J. Mammal. 83:411',
'Zool. J. Linn. Soc. 106:136',
'Z. Säugetierk. 60:86',
'Fieldiana Zool. n.s. 101:3',
'Arquivos de Museu Nacional (Rio de Janeiro) 63:137',
'Bull. Am. Mus. Nat. Hist. 244:165',
'J. Mammal. 76:514',
'J. Mammal. 81:21',
'Proc. Biol. Soc. Wash. 106:417',
'Proc. Biol. Soc. Wash. 106:762',
'J. Mammal. 83:835',
'Am. Mus. Novit. 3421:10',
'Mamm. Biol. 70:51',
'Bull. Inst. Roy. Sci. Nat. Belgique, Biol. 70:255',
'Bull. Inst. Roy. Sci. Nat. Belgique, Biol. 67:173',
'Bull. Inst. Roy. Sci. Nat. Belgique, Biol. 72:147',
'Bull. Inst. Roy. Sci. Nat. Belgique, Biol. 66:255',
'Bull. Inst. Roy. Sci. Nat. Belgique, Biol. 67:167',
'Bull. Inst. Roy. Sci. Nat. Belgique,  Biol. 72:153',
'J. Zool. Lond. 256:183',
'Mamm. Biol. 68:301',
'Fieldiana Zool. n.s. 106:18',
'Proc. Biol. Soc. Wash. 108:305',
'Fieldiana Zool. n.s. 89:17',
'Am. Mus. Novit. 3237:34',
'J. Mammal. 83:427',
'J. Mammal 86:420',
'J. Mammal. 76:26',
'Fieldiana Zool. n.s. 89:8',
'Bull. Inst. Roy. Sci. Nat. Belgique, Biol. 73:39',
'Mammalia 68:219',
'Bull. Inst. Roy. Sci. Nat. Belgique, Biol. 73:45',
'Mammalia 68:219',
'Bull. Inst. Roy. Sci. Nat. Belgique, Biol. 73:41',
'Bonn. Zool. Beitr. 50:320',
'Proc. Biol. Soc. Wash. 118:608',
'Zootaxa 913:1',
'Proc. Biol. Soc. Wash. 118:629',
'J. Mammal. 84:1445',
'In Lavrenhenko et al., Z. Säugetierk. 63:44',
'Rec. W. Aust. Mus. 16:428',
'In Kitchener and Maryanto, Rec. W. Aust. Mus. 17:43',
'In Kitchener and Suyanto, Rec. W. Aust. Mus. 18:113',
'Proc. Linn. Soc. N.S.W. 114:39',
'J. Zool. Lond. 261:168',
'Zootaxa 1241:13',
'Zoologica Scripta 32:121',
'Aust. J. Zool. 44:407',
'Proc. Biol. Soc. Wash. 106:753',
'S. Afr. J. Zool. 34:81',
'Bonn. Zool. Beitr. 50:333',
'Mamm. Biol. 70:62',
'Am. Mus. Novit. 3497:1',
'Am. Mus. Novit. 3368:7',
'Am. Mus. Novit. 3517:7',
'Rec. Aust. Mus. 46:157',
'Rec. Aust. Mus. 46:159',
'Systematics and Biodiversity 2:419',
'Z. Säugetierk. 64:37',
'Z. Säugetierk. 64:39',
'Am. Mus. Novit. 3351:17',
'Am. Mus. Novit. 3351:24',
'Biotemas 12:100',
'Senk. Biol. 84:150',
'Bol. Mus. Nac. Rio Janeiro Zool. 377:1',
'J. Mammal. 75:344',
'Stud. Neotrop. Fauna Envir. 36:2',
'Notulas Faunisticas 84:1',
'Resúmenes VI Congreso Iberoamericano de Conservación v Zoología de Vertebrados, p. 44',
'Ciencia Siglo XXI 3:10',
'Z. Säugetierk. 59:28',
'Occ. Pap. Mus. Texas Tech. Univ. 203:3',
'Occ. Pap. Mus. Texas Tech. Univ. 203:6',
'J. Mammal. 83:9',
'Am. Mus. Novit. 3279:2',
'Papeis Avulsos de Zoologia (São Paolo) 45:52',
'Mammalia 60:395',
'Publ. Zool., Univ. Cal. Press 132:19',
'Publ. Zool., Univ. Cal. Press 132:25',
'Am. Mus. Novit. 3380:30',
'Bull. Am. Mus. Nat. Hist. 244:194',
'Proc. Biol. Soc. Wash. 111:441',
'Proc. Biol. Soc. Wash. 111:460',
'Proc. Biol. Soc. Wash. 111:451',
'Proc. Biol. Soc. Wash. 111:454',
'Z. Säugetierk. 58:183',
'Mamm. Biol. 67:236',
'Z. Säugetierk. 57:40',
'Mammalia 59:541',
'Byul. Mosk. Ob-va Ispytatelei Prirody. Otd. Biol. 101:29',
'Zool. Research 21:204',
'Cont. Zool. Inst., St. Petersburg 3:3',
'Proc. Biol. Soc. Wash. 105:858',
'Revista de Biologia Tropical 49:370',
'Bull. Nat. Hist. Mus. Lond. (Zool.) 68:2',
'Bull. Nat. Hist. Mus. Lond. (Zool.) 61:103',
'Experientia 51:175, Fig. 1',
'Mamm. Study 29:30',
'Experientia 51:175, Fig. 1',
'Z. Säugetierk. 61:97',
'Ecotropica 1:93',
'Contributions in Mammalogy: A Memorial Volume Honoring Dr. J. Knox Jones, Jr., p. 61',
'J. Zool. Lond. 265:271',
'Bull. Inst. Roy. Sci. Nat. Belgique, Biol. 72 (Suppl.):10',
'Bonn. Zool. Beitr. 49:20',
'Proc. Biol. Soc. Wash. 116:855',
'Fieldiana Zool. n.s. 74:24',
'Am. Mus. Novit. 3202:7',
'Proc. Biol. Soc. Wash. 115:254',
'Mamm. Study 28:37',
'Occ. Pap. Mus. Texas Tech. Univ. 222:2',
'Proc. Biol. Soc. Wash. 113:307',
'Gortania 20:246',
'J. Mammal. 78:814',
'Acta Chiropterologica 6:258',
'Rec. Aust. Mus. 45:68',
'Rec. W. Aust. Mus. 16:408',
'Beaufortia 51:146',
'Systematics and Biodiversity 3:437',
'Aust. Mammal. 23:146',
'Australian Zool. 32:60',
'Mamm. Study 28:113',
'Bulletin of the National Science Museum of Tokyo Series A (Zoology) 31:30',
'J. Mammal. 78:343',
'Senk. Biol. 80:234',
'J. Zool. 256:166',
'Myotis 40:109',
'Rec. Aust. Mus. 45:45',
'Senk. Biol. 73:26',
'Acta Chiropterologica 8:44',
'Rec. W. Aust. Mus. 16:132',
'Senk. Biol. 79:259',
'Senk. Biol. 79:266',
'Acta Chiropterologica 5:33',
'Rec. W. Aust. Mus. 16:142',
'Mammalia 58:606',
'Actualidades Biologicas 23:53',
'J. Mammal. 86:458',
'Trop. Zool. 7:76',
'Am. Mus. Novit. 3426:4',
'Proc. Biol. Soc. Wash. 118:443',
'J. Mammal. 86:405',
'Mem. Soc. Cien. Nat. La Salle 57:73',
'Occ. Pap. Mus. Texas Tech. Univ. 232:1',
'Occ. Pap. Mus. Texas Tech. Univ. 242:1',
'Bull. Am. Mus. Nat. Hist. 273:62',
'Am. Mus. Novit. 3358:5',
'Am. Mus. Novit. 3158:6',
'Occ. Pap. Mus. Texas Tech. Univ. 254:5',
'Actualidades Biologicas 23:65',
'Occ. Pap. Mus. Texas Tech. Univ. 236:3',
'Actualidades Biologicas 26:81',
'Occ. Pap. Mus. Texas Tech. Univ. 217:4',
'Rev. Acad. Colomb. Cienc. 24:286',
'J. Mammal. 86:867',
'Z. Säugetierk. 59:260',
'Fieldiana Zool. n.s. 105:21',
'Fieldiana Zool. n.s. 105:27',
'Fieldiana Zool. n.s. 105:32',
'Fieldiana Zool. n.s. 105:37',
'J. Mammal. 87:239',
'Mammalia 57:213',
'J. Mammal. 86:1110',
'Acta Chiropterologica 6:230',
'J. Mammal. 74:901',
'Rec. W. Aust. Mus. 15:730',
'Senk. Biol. 76:2',
'J. Zool. Lond. 248:364',
'Proc. Biol. Soc. Wash. 109:5',
'Mammalia 58:119',
'Contributions in Mammalogy: A Memorial Volume Honoring Dr. J. Knox Jones, Jr., p. 85',
'Acta Chiropterologica 8:23',
'Zoosystema 27:875',
'Aust. Mammal. 23:116',
'In Benda et al., Acta Chiropterologica 6:207',
'Myotis 39 [dated 2001; issued April, 2002]:8',
'Myotis 38:6',
'Acta Chiropterologica 4:123',
'Zoologica Scripta 35:207',
'Acta Chiropterologica 3:2',
'Proc. Biol. Soc. Wash. 109:2',
'In von Helversen et al., Naturwissen- schaften 88:217',
'Mammalia 65:65',
'Acta Zool. Acad. Scient. Hungaricae 43:377',
'Acta Chiropterologica 7:11',
'Mammalia 62:248',
'Zool. Sci. 15:301',
'Faune de Madagascar, Chiroptères 84:128',
'Acta Chiropterologica 8:13',
'Acta Chiropterologica 7:2',
'Zool. Sci. 15:303',
'Acta Chiropterologica 6:220',
'Mammalia 67:95',
'Zool. J. Linn. Soc. 120:186',
'Guia de identiﬁcação de cervídeos Brasileiros, p. 7',
'In Chau, Vietnam Economic News 47:46',
'Anim. Conserv. 2:4',
'In Ha, Vietnam Economic News 38:46',
'Sci. and Tech. news. Forest Inv. and Planning Inst. (Hanoi), p. 5',
'Durban Mus. Novit. 28:20',
'Nature 363:443',
'J. Zool. Lond. 265:119',
'Mar. Mam. Sci. 21:378',
'Mar. Mam. Sci. 18:577');

$citations = array(
'Anthropol. Pap. Amer. Mus. Nat.  Hist. 78:8'
);

$citations=array(
'Arquivos de Museu Nacional (Rio de Janeiro) 60:290',
'Arquivos de Museu Nacional (Rio de Janeiro) 60:292',
'Arquivos de Museu Nacional (Rio de Janeiro) 63:116',
'Arquivos de Museu Nacional (Rio de Janeiro) 63:119',
'Arquivos de Museu Nacional (Rio de Janeiro) 63:137'
);

$citations=array(
'Occ. Pap. Mus. Texas Tech. Univ. 203:3',
'Occ. Pap. Mus. Texas Tech. Univ. 203:6',
'Occ. Pap. Mus. Texas Tech. Univ. 217:4',
'Occ. Pap. Mus. Texas Tech. Univ. 222:2',
'Occ. Pap. Mus. Texas Tech. Univ. 232:1',
'Occ. Pap. Mus. Texas Tech. Univ. 236:3',
'Occ. Pap. Mus. Texas Tech. Univ. 242:1',
'Occ. Pap. Mus. Texas Tech. Univ. 254:5',
'Occ. Pap. Mus. Texas Tech.Univ. 231:7',
'Occ. Pap. Sam Noble Oklahoma Mus. Nat. Hist. 9:3',
'Occ. Pap. Sam Noble Oklahoma Mus. Nat. Hist. 9:7',
'Occ. Pap. Sam Noble Oklahoma Mus. Nat. Hist. 9:9'
);

$citations=array(
'Rev. Acad. Colomb. Cienc. 24:286',
'Rev. Bras. Zool. 16:534',
'Rev. Bras. Zool. 20:301',
'Rev. Chilena Hist. Nat. 71:362'
);


$citations=array(
'Senk. Biol. 73:26',
'Senk. Biol. 76:2',
'Senk. Biol. 79:259',
'Senk. Biol. 79:266',
'Senk. Biol. 80:234',
'Senk. Biol. 84:150',
'Stud. Neotrop. Fauna Envir. 36:2',
'Systematics and Biodiversity 2:419'
);


foreach ($citations as $citation)
{

	$data = array(
		'bionames' => '',
		'issn' => '',
		'doi' => '',
		'handle' => '',
		'biostor' => '',
		'pdf' => ''
	);
	


	if (preg_match('/^(?<journal>.*)\s+(?<volume>\d+):(?<page>\d+)$/u', $citation, $m))
	{
		//print_r($m);
	
		$url = 'http://bionames.org/bionames-api/api_micro.php';
	
		$url .= '?' . http_build_query(array(
			'journal' => $m['journal'],
			'volume' => $m['volume'],
			'page' => $m['page']
			)
			);
			
		//echo $url . "\n";
		
		$json = get($url);
	
		//echo $json;
	
		$obj = json_decode($json);
	
		if (count($obj->results) == 1)
		{
			$data['bionames'] = $obj->results[0]->_id;
	
	
			if (isset($obj->results[0]->journal))
			{
				if (isset($obj->results[0]->journal->identifier))
				{
					foreach ($obj->results[0]->journal->identifier as $identifier)
					{
						switch ($identifier->type)
						{
							case 'issn':
								$data['issn'] = $identifier->id;
								break;
						
							default:
								break;
						}
					}
				}
			}
	
	
			// Identifier
			if (isset($obj->results[0]->identifier))
			{
				foreach ($obj->results[0]->identifier as $identifier)
				{
					switch ($identifier->type)
					{
						case 'doi':
							$data['doi'] = $identifier->id;
							break;
							
						case 'handle':
							$data['handle'] = $identifier->id;
							break;
							
						case 'biostor':
							$data['biostor'] = $identifier->id;
							break;
														
						default:
							break;
					}
				}
			}
			
			// URL/PDF
			if (isset($obj->results[0]->link))
			{
				foreach ($obj->results[0]->link as $link)
				{
					switch ($link->anchor)
					{
						case 'PDF':
							$data['pdf'] = $link->url;
							break;
														
						default:
							break;
					}
				}
			}
			
		}
		
	}

	echo join("\t", $data) . "\n";
}

?>