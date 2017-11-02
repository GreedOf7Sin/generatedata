<?php

/**
 * @package Countries
 */

class Country_Indonesia extends CountryPlugin {
	protected $continent   = "asia";
	protected $countryName = "Indonesia";
	protected $countrySlug = "indonesia";
	protected $regionNames = "Indonesia & N";

	protected $extendedData = array(
		"zipFormat" => array(
			"format" => "Xxxxx",
			"replacements" => array(
				"X" => "123456789",
				"x" => "0123456789"
			)
		),
		"phoneFormat" => array(
			"displayFormats" => array(
				"(021) Xxxx-xxxx",
				"08xx-xxxx-xxxx",
				"+62 Xxx xxxx xxxx",
				"1 (AAA) Xxx-xxxx",
				"1-AAA-Xxx-xxxx"
			)
		)
	);

	protected $countryData = array(
		array(
			"regionName" => 'Banten',
			"regionShort" => 'BT',
			"regionSlug" => 'banten',
			"weight" => 2,
			"cities" => array(
				"Kota Tangerang", "Kota Tangerang Selatan", "Kota Cilegon", "Kota Serang", "Kabupaten Tangerang", "Kabupaten Lebak", "Kabupaten Pandeglang",
				"Kabupaten Serang"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"format" => "ZYxxx",
					"replacements" => array(
						"Z" => "3",
						"Y" => "56",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Aceh',
			"regionShort" => 'AC',
			"regionSlug" => 'aceh',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Aceh Barat", "Kabupaten Aceh Barat Daya", "Kabupaten Aceh Besar", "Kabupaten Aceh Jaya", "Kabupaten Aceh Selatan", "Kabupaten Aceh Singkil", "Kabupaten Aceh Tamiang", "Kabupaten Aceh Tengah", "Kabupaten Aceh Tenggara", "Kabupaten Aceh Timur", "Kabupaten Aceh Utara",
				"Kabupaten Bener Meriah", "Kabupaten Bireuen", "Kabupaten Gayo Lues", "Kabupaten Nagan Raya", "Kabupaten Pidie", "Kabupaten Simeulue", "Kota Banda Aceh", "Kota Langsa", "Kota Lhokseumawe", "Kota Sabang", "Kota Subulussalam"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"format" => "ZZYxx",
					"replacements" => array(
						"Z" => "9",
						"Y" => "56789",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Bali',
			"regionShort" => 'BA',
			"regionSlug" => 'bali',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Badung", "Kabupaten Bangli", "Kabupaten Buleleng", "Kabupaten Gianyar", "Kabupaten Jembrana",
				"Kabupaten Karangasem", "Kabupaten Klungkung", "Kabupaten Tabana", "Kota Denpasar"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"format" => "ZYxxx",
					"replacements" => array(
						"Z" => "8",
						"Y" => "56",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Bengkulu',
			"regionShort" => 'BE',
			"regionSlug" => 'bengkulu',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bengkulu Selatan", "Kabupaten Bengkulu Utara", "Kabupaten Kaur", "Kabupaten Kapahiang", "Kabupaten Lebong",
				"Kabupaten Mukomuko", "Kabupaten Rejang Lebong", "Kabupaten Seluma", "Kota Bengkulu"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"format" => "ZYxxx",
					"replacements" => array(
						"Z" => "7",
						"Y" => "12",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Gorontalo',
			"regionShort" => 'GO',
			"regionSlug" => 'gorontalo',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Boalemo", "Kabupaten Bone Bolango", "Kabupaten Gorontalo", "Kabupaten Gorontalo Utara", "Kabupaten Pohuwato", "Kota Gorontalo"
			),
			"extendedData" => array(
				"zipFormat" => array(
					"area" => "ID-GO",
					"format" => "ZYxxx",
					"replacements" => array(
						"Z" => "9",
						"Y" => "0123456",
						"x" => "0123456789"
					)
				)
			)
		),
		array(
			"regionName" => 'Jakarta',
			"regionShort" => 'JK',
			"regionSlug" => 'jakarta',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Administrasi Kepulauan Seribu", "Kota Administrasi Jakarta Barat", "Kota Administrasi Jakarta Pusat", "Kota Administrasi Jakarta Selatan", "Kota Administrasi Jakarta Timur", "Kota Administrasi Jakarta Utara"
			)
		),
		array(
			"regionName" => 'Jambi',
			"regionShort" => 'JA',
			"regionSlug" => 'jambi',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Batanghari", "Kabupaten Bungo", "Kabupaten Kerinci", "Kabupaten Merangin", "Kabupaten Muaro Jambi", "Kabupaten Sarolangun",
				"Kabupaten Tanjung Jabung Barat", "Kabupaten Tanjung Jabung Timur", "Kabupaten Tebo", "Kota Jambi", "Kota Sungaipenuh"
			)
		),
		array(
			"regionName" => 'Jawa Barat',
			"regionShort" => 'DE',
			"regionSlug" => 'jawa barat',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bandung", "Kabupaten Bandung Barat", "Kabupaten Bekasi", "Kabupaten Bogor", "Kabupaten Ciamis", "Kabupaten Cianjur", "Kabupaten Cirebon", "Kabupaten Garut", "Kabupaten Indramayu",
				"Kabupaten Karawang", "Kabupaten Kuningan", "Kabupaten Majalangka", "Kabupaten Pangandaran", "Kabupaten Purwakarta", "Kabupaten Subang", "Kabupaten Sukabumi", "Kabupaten Sumedang", "Kabupaten Tasikmalaya", "Kota Bandung",
				"Kota Banjar", "Kota Bekasi", "Kota Bogor", "Kota Cimahi", "Kota Cirebon", "Kota Depok", "Kota Sukabumi", "Kota Tasikmalaya"
			)
		),
		array(
			"regionName" => 'Jawa Tengah',
			"regionShort" => 'JT',
			"regionSlug" => 'jawa tengah',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Banjarnegara", "Kabupaten Banyumas", "Kabupaten Batang", "Kabupaten Blora", "Kabupaten Boyolali", "Kabupaten Brebes", 
				"Kabupaten Cilacap", "Kabupaten Demak", "Kabupaten Grobogan", "Kabupaten Jepara", "Kabupaten Karanganyar", "Kabupaten Kebumen", 
				"Kabupaten Kendal", "Kabupaten Klaten", "Kabupaten Kudus", "Kota Magelang", "Kabupaten Pati", "Kabupaten Pekalongan", 
				"Kabupaten Pemalang", "Kabupaten Purbalingga", "Kabupaten Purworejo", "Kabupaten Rembang", "Kabupaten Semarang", 
				"Kabupaten Sragen", "Kabupaten Sukaharjo", "Kabupaten Tegal", "Kabupaten Temanggung", "Kabupaten Wonogiri", 
				"Kabupaten Wonosobo", "Kota Magelang", "Kota Pekalongan", "Kota Salatiga", "Kota Semarang", "Kota Surakarta", "Kota Tegal"
			)
		),
		array(
			"regionName" => 'Jawa Timur',
			"regionShort" => 'JI',
			"regionSlug" => 'jawa timur',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bangkalan", "Kabupaten Banyuwangi", "Kabupaten Blitar", "Kabupaten Bojonegoro", "Kabupaten Bondowoso", "Kabupaten Gresik", "Kabupaten Jember", "Kabupaten Jombang", "Kabupaten Kediri", "Kabupaten Lamongan", "Kabupaten Lumajang", "Kabupaten Madiun", "Kabupaten Magetan", "Kabupaten Malang", "Kabupaten Mojokerto", "Kabupaten Nganjuk", "Kabupaten Ngawi", "Kabupaten Pacitan", "Kabupaten Pamekasan", "Kabupaten Pasuruan", "Kabupaten Ponorogo", "Kabupaten Probolinggo", "Kabupaten Sampang", "Kabupaten Sidoarjo", "Kabupaten Situbondo", "Kabupaten Sumenep", "Kabupaten Trenggalek", "Kabupaten Tuban", "Kabupaten Tulungagung", "Kota Batu", "Kota Blitar", "Kota Kediri", "Kota Madiun", "Kota Malang", "Kota Mojokerto", "Kota Pasuruan", "Koto Probolinggo", "Kota Surabaya"
			)
		),
		array(
			"regionName" => 'Kalimantan Barat',
			"regionShort" => 'KB',
			"regionSlug" => 'kalimantan barat',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bengkayang", "Kabupaten Kapuas Hulu", "Kabupaten Kayong Utara", "Kabupaten Ketapang", "Kabupaten Kubu Raya", "Kabupaten Landak", "Kabupaten Melawi", "Kabupaten Mempawah", "Kabupaten Sambas", "Kabupaten Sanggau", "Kabupaten Sekadau", "Kabupaten Sintang", "Kota Pontianak", "Kota Singkawang"
			)
		),
		array(
			"regionName" => 'Kalimantan Selatan',
			"regionShort" => 'KS',
			"regionSlug" => 'kalimantan selatan',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Balangan", "Kabupaten Banjar", "Kabupaten Barito Kuala", "Kabupaten Hulu Sungai Selatan", "Kabupaten Hulu Sungai Tengah", "Kabupaten Hulu Sungai Utara", "Kabupaten Kotabaru", "Kabupaten Tabalong", "Kabupaten Tanah Bumbu", "Kabupaten Tanah Laut", "Kabupaten Tapin", "Kota Banjarbaru", "Kota Banjarmasin"
			)
		),
		array(
			"regionName" => 'Kalimantan Tengah',
			"regionShort" => 'KT',
			"regionSlug" => 'kalimantan tengah',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Barito Selatan", "Kabupaten Barito Timur", "Kabupaten Barito Utara", "Kabupaten Gunung Mas", "Kabupaten Kapuas", "Kabupaten Katingan", "Kabupaten Kotawaringin Barat", "Kabupaten Kotawaringin Timur", "Kabupaten Lamandau", "Kabupaten Murung Raya", "Kabupaten Pulang Pisau", "Kabupaten Sukamara", "Kabupaten Seruyan", "Kota Palangka Raya"
			)
		),
		array(
			"regionName" => 'Kalimantan Timur',
			"regionShort" => 'KI',
			"regionSlug" => 'kaliman timur',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Berau", "Kabupaten Kutai Barat", "Kabupaten Kutai Kartanegara", "Kabupaten Kutai Timur", "Kabupaten Mahakam Ulu", "Kabupaten Paser", "Kabupaten Panajam Paser Utara", "Kota Balikpapan", "Kota Bontang", "Kota Samarinda"
			)
		),
		array(
			"regionName" => 'Kalimantan Utara',
			"regionShort" => 'KU',
			"regionSlug" => 'kalimantan utara',
			"weight" => 2,
			"cities" => array(
				"Kota Tarakan", "Kabupaten Nunukan", "Kabupaten Bulungan", "Kabupaten Malinau", "Kabupaten Tana Tidung"
			)
		),
		array(
			"regionName" => 'Kepulauan Bangka Belitung',
			"regionShort" => 'BB',
			"regionSlug" => 'kepulauan bangka belitung',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bangka", "Kabupaten Belitung", "Kabupaten Bangka Barat", "Kabupaten Bangka Tengah", "Kabupaten Bangka Selatan", "Kabupaten Bangka Timur", "Kota Pangkal Pinang"
			)
		),
		array(
			"regionName" => 'Kepulauan Riau',
			"regionShort" => 'KR',
			"regionSlug" => 'kepulauan riau',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bintan Kepulauan", "Kabupaten Karimun", "Kabupaten Kepulauan Anambas", "Kabupaten Lingga", "Kabupaten Natuna", "Kota Batam", "Kota Tanjung Pinang"
			)
		),
		array(
			"regionName" => 'Lampung',
			"regionShort" => 'LA',
			"regionSlug" => 'lampung',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Lampung Barat", "Kabupaten Lampung Selatan", "Kabupaten Lampung Tengah", "Kabupaten Lampung Timur", "Kabupaten Lampung Utara", "Kabupaten Mesuji", "Kabupaten Pesawaran", "Kabupaten Pesisir Barat", "Kabupaten Pringsewu", "Kabupaten Tanggamus", "Kabupaten Tulang Bawang", "Kabupaten Tulang Bawang Barat", "Kabupaten Way Kanan", "Kota Bandar Lampung", "Kota Bandar Lampung", "Kota Metro"
			)
		),
		array(
			"regionName" => 'Maluku',
			"regionShort" => 'MA',
			"regionSlug" => 'maluku',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Buru", "Kabupaten Buru Selatan", "Kabupaten Kepulauan Aru", "Kabupaten Maluku Barat Daya", "Kabupaten Maluku Tengah", "Kabupaten Maluku Tenggara", "Kabupaten Maluku Tenggara Barat", "Kabupaten Seram Bagian Barat", "Kabupaten Seram Bagian Timur", "Kota Ambon", "Kota Tual"
			)
		),
		array(
			"regionName" => 'Maluku Utara',
			"regionShort" => 'MU',
			"regionSlug" => 'maluku utara',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Halmahera Barat", "Kabupaten Halmahera Tengah", "Kabupaten Halmahera Timur", "Kabupaten Halmahera Selatan", "Kabupaten Halmahera Utara",
				"Kabupaten Kepulauan Sula", "Kabupaten Pulau Morotai", "Kabupaten Pulau Taliabu", "Kota Ternate", "Kota Tidore Kepulauan"
			)
		),
		array(
			"regionName" => 'Nusa Tenggara Barat',
			"regionShort" => 'NB',
			"regionSlug" => 'nusa tenggara barat',
			"weight" => 2,
			"cities" => array(
				"Kota Mataram", "Kabupaten Lombok Barat", "Kabupaten Lombok Timur", "Kabupaten Lombok Tengah", "Kabupaten Lombok Utara",
				"Kabupaten Sumbawa", "Kabupaten Sumbawa Barat", "Kabupaten Dompu", "Kabupataen Bima", "Kota Bima"
			)
		),
		array(
			"regionName" => 'Nusa Tenggara Timur',
			"regionShort" => 'NT',
			"regionSlug" => 'nusa tenggara timur',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Alor", "Kabupaten Belu", "Kabupaten Ende", "Kabupaten Flores Timur", "Kabupaten Kupang", "Kabupaten Lembata", "Kabupaten Malaka", "Kabupaten Manggarai", "Kabupaten Manggarai Barat", "Kabupaten Manggarai Timur", "Kabupaten Ngada",
				"Kabupaten Nagekeo", "Kabupaten Rote Ndao", "Kabupaten Sabu Raijua", "Kabupaten Sikka", "Kabupaten Sumba Barat", "Kabupaten Sumba Barat Daya", "Kabupaten Sumba Tengah", "Kabupaten Sumba Timur", "Kabupaten Timor Tengah Selatan", "Kabupaten Timor Tengah Utara", "Kota Kupang"
			)
		),
		array(
			"regionName" => 'Papua',
			"regionShort" => 'PA',
			"regionSlug" => 'papua',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Asmat", "Kabupaten Biak Numfor", "Kabupaten Boven Digoel", "Kabupaten Deiyai", "Kabupaten Dogiyai", "Kabupaten Intan Jaya", "Kabupaten Jayapura", "Kabupaten Jayawijaya", "Kabupaten Keerom", "Kabupaten Kepulauan Yapen", "Kabupaten Lanny Jaya", "Kabupaten Mamberamo Raya", "Kabupaten Mamberamo Tengah", "Kabupaten Mappi", "Kabupaten Merauke",
				"Kabupaten Mimika", "Kabupaten Nabire", "Kabupaten Nduga", "Kabupaten Paniai", "Kabupaten Pegunungan Bintang", "Kabupaten Puncak", "Kabupaten Puncak Jaya", "Kabupaten Sarmi", "Kabupaten Supiori", "KKabupaten Tolikara", "Kabupaten Waropen", "Kabupaten Yahukimo", "Kabupaten Yalimo", "Kota Jayapura"
			)
		),
		array(
			"regionName" => 'Papua Barat',
			"regionShort" => 'PB',
			"regionSlug" => 'papua barat',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Fakfak", "Kabupaten Kaimana", "Kabupaten Manokwari", "Kabupaten Manokwari Selatan", "Kabupaten Maybrat", "Kabupaten Pegunungan Arfak", "Kabupaten Raja Ampat", "Kabupaten Sorong", "Kabupaten Sorong Selatan", "Kabupaten Tambrauw", "Kabupaten Teluk Bintuni", "Kabupaten Teluk Wondama", "Kota Sorong"
			)
		),
		array(
			"regionName" => 'Riau',
			"regionShort" => 'RI',
			"regionSlug" => 'riau',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bengkalis", "Kabupaten Indragiri Hilir", "Kabupaten Indragiri Hulu", "Kabupaten Kampar", "Kabupaten Kepulauan Meranti", "Kabupaten Kuantan Singingi", "Kabupaten Pelalawan", "Kabupaten Rokan Hilir", "Kabupaten Rokan Hulu", "Kabupaten Siak", "Kota Dumai", "Kota Pekanbaru"
			)
		),			
		array(
			"regionName" => 'Sulawesi Barat',
			"regionShort" => 'SR',
			"regionSlug" => 'sulawesi barat',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Majene", "Kabupaten Mamasa", "Kabupaten Mamuju", "Kabupaten Mamuju Tengah", "Kabupaten Mamuju Utara", "Kabupaten Polewali Mandar"
			)
		),		
		array(
			"regionName" => 'Sulawesi Selatan',
			"regionShort" => 'SN',
			"regionSlug" => 'sulawesi selatan',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bantaeng", "Kabupaten Barru", "Kabupaten Bone", "Kabupaten Bulukumba", "Kabupaten Enrekang", "Kabupaten Gowa", "Kabupaten Jeneponto", "Kabupaten Kepulauan Selayar", "Kabupaten Luwu", "Kabupaten Luwu Timur", "Kabupaten Luwu Utara", "Kabupaten Maros",
				"Kabupaten Pangkajene dan Kepulauan", "Kabupaten Pinrang", "Kabupaten Sidenreng Rappang", "Kabupaten Sinjai", "Kabupaten Soppeng", "Kabupaten Takalar", "Kabupaten Tana Toraja", "Kabupaten Toraja Utara", "Kabupaten Wajo", "Kota Makassar", "Kota Palopo", "Kota Parepare"
			)
		),	
		array(
			"regionName" => 'Sulawesi Tengah',
			"regionShort" => 'ST',
			"regionSlug" => 'sulawesi tengah',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Banggai", "Kabupaten Banggai Kepulauan", "Kabupaten Banggai Laut", "Kabupaten Buol", "Kabupaten Donggala", "Kabupaten Morowali", "Kabupaten Morowali Utara", "Kabupaten Parigi Moutong", "Kabupaten Poso", "Kabupaten Sigi", "Kabupaten Tojo Una-Una", "Kabupaten Tolitoli", "Kota Palu"
			)
		),
		array(
			"regionName" => 'Sulawesi Tenggara',
			"regionShort" => 'SN',
			"regionSlug" => 'sulawesi tenggara',
			"weight" => 2,
			"cities" => array(
				"Bombana", "Buton","Buton Utara", "Kolaka","Kolaka Utara", "Kolaka Timur", "Konawe", "Konawe Utara", "Konawe Selatan", "Konawe Kepulauan", "Muna", "Wakatobi" 
			)
		),		
		array(
			"regionName" => 'Sulawesi Utara',
			"regionShort" => 'SA',
			"regionSlug" => 'sulawesi utara',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bolaang Mongondow", "Kabupaten Bolaang Mongondow Selatan", "Kabupaten Bolaang Mongondow Timur", "Kabupaten Bolaang Mongondow Utara", "Kabupaten Kepulauan Sangihe", "Kabupaten Kepulauan Siau Tagulandang Biaro", "Kabupaten Kepulauan Talaud", "Kabupaten Minahasa", "Kabupaten Minahasa Selatan", "Kabupaten Minahasa Tenggara", "Kabupaten Minahasa Utara", "Kota Bitung", "Kota Kotamobagu", "Kota Manado", "Koto Tomohon"
			)
		),
		array(
			"regionName" => 'Sumatra Barat',
			"regionShort" => 'SB',
			"regionSlug" => 'sumatra barat',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Agam", "Kabupaten Dharmasraya", "Kabupaten Kepulauan Mentawai", "Kabupaten Lima Puluh Kota", "Kabupaten Padang Pariaman", "Kabupaten Pasaman", "Kabupaten Pasaman Barat", "Kabupaten Pesisir Selatan", "Kabupaten Sijunjung", "Kabupaten Solok",
				"Kabupaten Solok Selatan", "Kabupaten Tanah Datar", "Kota Bukittinggi", "Kota Padang", "Kota Padangpanjang", "Kota Pariaman", "Kota Payakumbuh", "Kota Sawahlunto", "Kota Solok"
			)
		),
		array(
			"regionName" => 'Sumatra Selatan',
			"regionShort" => 'SS',
			"regionSlug" => 'sumatra selatan',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Banyuasin", "Kabupaten Empat Lawang", "Kabupaten Lahat", "Kabupaten Muara Enim", "Kabupaten Musi Banyuasin", "Kabupaten Musi Rawas", "Kabupaten Musi Rawas Utara", "Kabupaten Ogan Ilir", "Kabupaten Ogan Komering Ilir", "Kabupaten Ogan Komering Ulu", "Kabupaten Ogan Komering Ulu Selatan", "Kabupaten Ogan Komering Ulu Timur", "Kabupaten Penukal Abab Lematang Ilir", "Kota Lubuklinggau", "Kota Pagar Alam", "Kota Palembang", "Kota Prabumulih"
			)
		),			
		array(
			"regionName" => 'Sumatra Utara',
			"regionShort" => 'SU',
			"regionSlug" => 'sumatra utara',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Asahan", "Kabupaten Batubara", "Kabupaten Dairi", "Kabupaten Deli Serdang", "Kabupaten Humbang Hasundutan", "Kabupaten Karo", "Kabupaten Labuhanbatu", "Kabupaten Labuhanbatu Selatan", "Kabupaten Labuhanbatu Utara", "Kabupaten Langkat", "Kabupaten Mandailing Natal", 
				"Kabupaten Nias", "Kabupaten Nias Barat", "Kabupaten Nias Selatan", "Kabupaten Nias Utara", "Kabupaten Padang Lawas", "Kabupaten Padang Lawas Utara", "Kabupaten Pakpak Bharat", "Kabupaten Samosir", "Kabupaten Serdang Bedagai", "Kabupaten Simalungun", "Kabupaten Tapanuli Selatan", 
				"Kabupaten Tapanuli Tengah", "Kabupaten Tapanuli Utara", "Kabupaten Toba Samosir", "Kota Binjai", "Kota Gunungsitoli", "Kota Medan", "Kota Padangsidempuan", "Kota Pematangsiantar", "Kota Sibolga", "Kota Tanjungbalai", "Kota Tebing Tinggi"
			)
		),	
		array(
			"regionName" => 'Yogyakarta',
			"regionShort" => 'YO',
			"regionSlug" => 'yogyakarta',
			"weight" => 2,
			"cities" => array(
				"Kabupaten Bantul", "Kabupaten Gunungkidul", "Kabupaten Kulon Progo", "Kabupaten Sleman", "Kabupaten Yogyakarta"
			)
		),												
	);

	public function install() {
		return CountryPluginHelper::populateDB($this->countryName, $this->countrySlug, $this->countryData);
	}
}
