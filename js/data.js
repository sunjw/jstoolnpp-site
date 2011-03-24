/**
 * Multi browsers' Peacekeeper results analysis.
 * Datas part.
 * Author: Sun Junwen
 */
var TestDatas = [{
		browser : "chrome", 
		version : "8.0.552.215", 
		os : "fc12", 
		date : "20101213", 
		total : 3088, 
		rendering : 2075, 
		socialNetwork : 2223, 
		complexGraphics : 7342, 
		data : 6031, 
		domOperations : 2293, 
		textParsing : 4406
	}, {
		browser : "chrome", 
		version : "8.0.552.216", 
		os : "vista", 
		date : "20101213", 
		total : 3171, 
		rendering : 1828, 
		socialNetwork : 2138, 
		complexGraphics : 6915, 
		data : 6490, 
		domOperations : 2850, 
		textParsing : 4439
	}, {
		browser : "chrome", 
		version : "8.0.552.224", 
		os : "fc12", 
		date : "20101214", 
		total : 3070, 
		rendering : 2078, 
		socialNetwork : 2305, 
		complexGraphics : 7284, 
		data : 5343, 
		domOperations : 2469, 
		textParsing : 4320
	}, {
		browser : "chrome", 
		version : "8.0.552.224", 
		os : "vista", 
		date : "20101223", 
		total : 3395, 
		rendering : 1777, 
		socialNetwork : 2224, 
		complexGraphics : 6986, 
		data : 7988, 
		domOperations : 2790, 
		textParsing : 5124
	}, {
		browser : "chrome", 
		version : "9.0.597.83", 
		os : "fc12", 
		date : "20110118", 
		total : 3277, 
		rendering : 2033, 
		socialNetwork : 2215, 
		complexGraphics : 6818, 
		data : 6487, 
		domOperations : 2548, 
		textParsing : 5083
	}, {
		browser : "chrome", 
		version : "9.0.597.84", 
		os : "vista", 
		date : "20110205", 
		total : 3681, 
		rendering : 1760, 
		socialNetwork : 2165, 
		complexGraphics : 6180, 
		data : 9634, 
		domOperations : 3070, 
		textParsing : 6002
	}, {
		browser : "chrome", 
		version : "10.0.648.114", 
		os : "fc12", 
		date : "20110227", 
		total : 3293, 
		rendering : 1959, 
		socialNetwork : 2239, 
		complexGraphics : 6909, 
		data : 6684, 
		domOperations : 2676, 
		textParsing : 4939
	}, {
		browser : "chrome", 
		version : "10.0.648.127", 
		os : "vista", 
		date : "20110310", 
		total : 3779, 
		rendering : 1790, 
		socialNetwork : 2037, 
		complexGraphics : 6627, 
		data : 12768, 
		domOperations : 2670, 
		textParsing : 6205
	}, {
		browser : "firefox", 
		version : "4.0b8", 
		os : "fc12", 
		date : "20101222", 
		total : 2016, 
		rendering : 1421, 
		socialNetwork : 1849, 
		complexGraphics : 6717, 
		data : 2937, 
		domOperations : 1445, 
		textParsing : 2993
	}, {
		browser : "firefox", 
		version : "4.0b8", 
		os : "vista", 
		date : "20101223", 
		total : 2017, 
		rendering : 1149, 
		socialNetwork : 1630, 
		complexGraphics : 5000, 
		data : 3508, 
		domOperations : 1953, 
		textParsing : 2604
	}, {
		browser : "firefox", 
		version : "4.0b9", 
		os : "fc12", 
		date : "20110115", 
		total : 2012, 
		rendering : 1317, 
		socialNetwork : 1914, 
		complexGraphics : 6486, 
		data : 3089, 
		domOperations : 1437, 
		textParsing : 2947
	}, {
		browser : "firefox", 
		version : "4.0b9", 
		os : "vista", 
		date : "20110115", 
		total : 1904, 
		rendering : 884, 
		socialNetwork : 1554, 
		complexGraphics : 5067, 
		data : 3591, 
		domOperations : 1696, 
		textParsing : 2998
	}, {
		browser : "firefox", 
		version : "4.0b10", 
		os : "fc12", 
		date : "20110118", 
		total : 2016, 
		rendering : 1479, 
		socialNetwork : 1954, 
		complexGraphics : 5998, 
		data : 2918, 
		domOperations : 1390, 
		textParsing : 2843
	}, {
		browser : "firefox", 
		version : "4.0b10", 
		os : "vista", 
		date : "20110118", 
		total : 2011, 
		rendering : 1057, 
		socialNetwork : 1560, 
		complexGraphics : 4520, 
		data : 3620, 
		domOperations : 1838, 
		textParsing : 3004
	}, {
		browser : "firefox", 
		version : "4.0b11", 
		os : "fc12", 
		date : "20110209", 
		total : 2048, 
		rendering : 1386, 
		socialNetwork : 1881, 
		complexGraphics : 5653, 
		data : 3742, 
		domOperations : 1381, 
		textParsing : 2675
	}, {
		browser : "firefox", 
		version : "4.0b11", 
		os : "vista", 
		date : "20110209", 
		total : 2197, 
		rendering : 1288, 
		socialNetwork : 2140, 
		complexGraphics : 4731, 
		data : 3359, 
		domOperations : 1842, 
		textParsing : 3007
	}, {
		browser : "firefox", 
		version : "4.0b12", 
		os : "fc12", 
		date : "20110226", 
		total : 1973, 
		rendering : 1445, 
		socialNetwork : 1885, 
		complexGraphics : 5568, 
		data : 3078, 
		domOperations : 1337, 
		textParsing : 2670
	}, {
		browser : "firefox", 
		version : "4.0b12", 
		os : "vista", 
		date : "20110226", 
		total : 2070, 
		rendering : 1333, 
		socialNetwork : 1941, 
		complexGraphics : 4437, 
		data : 2830, 
		domOperations : 1821, 
		textParsing : 2855
	}, {
		browser : "firefox", 
		version : "4.0rc1", 
		os : "fc12", 
		date : "20110304", 
		total : 1914, 
		rendering : 1408, 
		socialNetwork : 1821, 
		complexGraphics : 5433, 
		data : 2778, 
		domOperations : 1430, 
		textParsing : 2530
	}, {
		browser : "firefox", 
		version : "4.0rc1", 
		os : "vista", 
		date : "20110310", 
		total : 2110, 
		rendering : 1262, 
		socialNetwork : 1942, 
		complexGraphics : 4705, 
		data : 3219, 
		domOperations : 1806, 
		textParsing : 2937
	}, {
		browser : "firefox", 
		version : "4.0", 
		os : "fc12", 
		date : "20110320", 
		total : 1969, 
		rendering : 1408, 
		socialNetwork : 1789, 
		complexGraphics : 5340, 
		data : 3126, 
		domOperations : 1380, 
		textParsing : 2730
	}, {
		browser : "firefox", 
		version : "4.0", 
		os : "vista", 
		date : "20110320", 
		total : 2061, 
		rendering : 1223, 
		socialNetwork : 1869, 
		complexGraphics : 4624, 
		data : 3262, 
		domOperations : 1832, 
		textParsing : 2724
	}, {
		browser : "ie", 
		version : "8.0", 
		os : "vista", 
		date : "20101213", 
		total : 391, 
		rendering : 552, 
		socialNetwork : 436, 
		complexGraphics : 0, 
		data : 333, 
		domOperations : 260, 
		textParsing : 439
	}, {
		browser : "ie", 
		version : "9.0.8023.600", 
		os : "vista", 
		date : "20101213", 
		total : 1832, 
		rendering : 1375, 
		socialNetwork : 945, 
		complexGraphics : 2881, 
		data : 3967, 
		domOperations : 1088, 
		textParsing : 3684
	}, {
		browser : "ie", 
		version : "9.0rc", 
		os : "vista", 
		date : "20110212", 
		total : 1818, 
		rendering : 1487, 
		socialNetwork : 834, 
		complexGraphics : 2866, 
		data : 3484, 
		domOperations : 1067, 
		textParsing : 4310
	}, {
		browser : "ie", 
		version : "9.0", 
		os : "vista", 
		date : "20110316", 
		total : 1976, 
		rendering : 1451, 
		socialNetwork : 950, 
		complexGraphics : 2834, 
		data : 4614, 
		domOperations : 1060, 
		textParsing : 4478
	}, {
		browser : "opera", 
		version : "11.00", 
		os : "fc12", 
		date : "20101222", 
		total : 2852, 
		rendering : 2184, 
		socialNetwork : 2688, 
		complexGraphics : 6320, 
		data : 2787, 
		domOperations : 2173, 
		textParsing : 5312
	}, {
		browser : "opera", 
		version : "11.00", 
		os : "vista", 
		date : "20101215", 
		total : 2725, 
		rendering : 2626, 
		socialNetwork : 1904, 
		complexGraphics : 6291, 
		data : 2504, 
		domOperations : 2684, 
		textParsing : 4477
	}, {
		browser : "opera", 
		version : "11.01", 
		os : "fc12", 
		date : "20110310", 
		total : 2710, 
		rendering : 2140, 
		socialNetwork : 2146, 
		complexGraphics : 6755, 
		data : 2481, 
		domOperations : 2250, 
		textParsing : 5707
	}, {
		browser : "opera", 
		version : "11.01", 
		os : "vista", 
		date : "20110307", 
		total : 2722, 
		rendering : 2499, 
		socialNetwork : 1999, 
		complexGraphics : 7063, 
		data : 2499, 
		domOperations : 2769, 
		textParsing : 4324
	}
];

 