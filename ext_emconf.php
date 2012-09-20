<?php

########################################################################
# Extension Manager/Repository config file for ext "tw_lucenesearch".
#
# Auto generated 20-09-2012 10:57
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'tollwerk Lucene search',
	'description' => 'Simple and lightweight implementation of the Apache Lucene Index as frontend search solution for TYPO3, built on extbase / fluid, supporting wildcard and fuzzy searches, search term highlighting, indexing of uncached pages, custom search term rewrite hooks and much more – without any further software requirements (Java application server, Apache Solr etc.)',
	'category' => 'plugin',
	'author' => 'Dipl.-Ing. Joschi Kuphal',
	'author_email' => 'joschi@tollwerk.de',
	'author_company' => 'tollwerk® GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => 'typo3temp/tw_lucenesearch',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.6.1',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3.0-0.0.0',
			'fluid' => '1.3.0-0.0.0',
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.5.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:120:{s:20:"class.ext_update.php";s:4:"4e49";s:21:"ext_conf_template.txt";s:4:"00bd";s:12:"ext_icon.gif";s:4:"307f";s:17:"ext_localconf.php";s:4:"1ad1";s:14:"ext_tables.php";s:4:"fe75";s:39:"Classes/Controller/LuceneController.php";s:4:"1dcb";s:33:"Classes/Domain/Model/Document.php";s:4:"4e56";s:33:"Classes/Domain/Model/QueryHit.php";s:4:"ba1a";s:34:"Classes/Domain/Model/QueryHits.php";s:4:"07e8";s:26:"Classes/Service/Lucene.php";s:4:"03f5";s:27:"Classes/Utility/Indexer.php";s:4:"d1c8";s:27:"Classes/Utility/Wizicon.php";s:4:"0f3b";s:43:"Classes/ViewHelpers/Array/KeyViewHelper.php";s:4:"665b";s:49:"Classes/ViewHelpers/Index/TimestampViewHelper.php";s:4:"ae12";s:45:"Classes/ViewHelpers/Index/TitleViewHelper.php";s:4:"5135";s:50:"Classes/ViewHelpers/Search/HighlightViewHelper.php";s:4:"6b5f";s:26:"Classes/Zend/Exception.php";s:4:"61d7";s:33:"Classes/Zend/Search/Exception.php";s:4:"3bc2";s:30:"Classes/Zend/Search/Lucene.php";s:4:"67f1";s:39:"Classes/Zend/Search/Lucene/Document.php";s:4:"689e";s:40:"Classes/Zend/Search/Lucene/Exception.php";s:4:"e216";s:36:"Classes/Zend/Search/Lucene/Field.php";s:4:"85ed";s:34:"Classes/Zend/Search/Lucene/FSM.php";s:4:"2a5e";s:40:"Classes/Zend/Search/Lucene/FSMAction.php";s:4:"0439";s:40:"Classes/Zend/Search/Lucene/Interface.php";s:4:"c9f7";s:42:"Classes/Zend/Search/Lucene/LockManager.php";s:4:"b44f";s:44:"Classes/Zend/Search/Lucene/MultiSearcher.php";s:4:"dfa9";s:44:"Classes/Zend/Search/Lucene/PriorityQueue.php";s:4:"bb7d";s:36:"Classes/Zend/Search/Lucene/Proxy.php";s:4:"a20a";s:40:"Classes/Zend/Search/Lucene/TempIndex.php";s:4:"38ea";s:55:"Classes/Zend/Search/Lucene/TermStreamsPriorityQueue.php";s:4:"2483";s:48:"Classes/Zend/Search/Lucene/Analysis/Analyzer.php";s:4:"1f18";s:45:"Classes/Zend/Search/Lucene/Analysis/Token.php";s:4:"708c";s:51:"Classes/Zend/Search/Lucene/Analysis/TokenFilter.php";s:4:"e497";s:55:"Classes/Zend/Search/Lucene/Analysis/Analyzer/Common.php";s:4:"aaa2";s:60:"Classes/Zend/Search/Lucene/Analysis/Analyzer/Common/Text.php";s:4:"af86";s:63:"Classes/Zend/Search/Lucene/Analysis/Analyzer/Common/TextNum.php";s:4:"e0ac";s:60:"Classes/Zend/Search/Lucene/Analysis/Analyzer/Common/Utf8.php";s:4:"1850";s:63:"Classes/Zend/Search/Lucene/Analysis/Analyzer/Common/Utf8Num.php";s:4:"6498";s:76:"Classes/Zend/Search/Lucene/Analysis/Analyzer/Common/Text/CaseInsensitive.php";s:4:"7b8c";s:79:"Classes/Zend/Search/Lucene/Analysis/Analyzer/Common/TextNum/CaseInsensitive.php";s:4:"e1af";s:76:"Classes/Zend/Search/Lucene/Analysis/Analyzer/Common/Utf8/CaseInsensitive.php";s:4:"2c9a";s:79:"Classes/Zend/Search/Lucene/Analysis/Analyzer/Common/Utf8Num/CaseInsensitive.php";s:4:"1133";s:61:"Classes/Zend/Search/Lucene/Analysis/TokenFilter/LowerCase.php";s:4:"bf48";s:65:"Classes/Zend/Search/Lucene/Analysis/TokenFilter/LowerCaseUtf8.php";s:4:"de98";s:62:"Classes/Zend/Search/Lucene/Analysis/TokenFilter/ShortWords.php";s:4:"3e1d";s:61:"Classes/Zend/Search/Lucene/Analysis/TokenFilter/StopWords.php";s:4:"b50a";s:44:"Classes/Zend/Search/Lucene/Document/Docx.php";s:4:"b9ba";s:49:"Classes/Zend/Search/Lucene/Document/Exception.php";s:4:"2410";s:44:"Classes/Zend/Search/Lucene/Document/Html.php";s:4:"be6c";s:47:"Classes/Zend/Search/Lucene/Document/OpenXml.php";s:4:"128d";s:44:"Classes/Zend/Search/Lucene/Document/Pptx.php";s:4:"2d30";s:44:"Classes/Zend/Search/Lucene/Document/Xlsx.php";s:4:"8779";s:53:"Classes/Zend/Search/Lucene/Index/DictionaryLoader.php";s:4:"6547";s:47:"Classes/Zend/Search/Lucene/Index/DocsFilter.php";s:4:"3151";s:46:"Classes/Zend/Search/Lucene/Index/FieldInfo.php";s:4:"7c73";s:48:"Classes/Zend/Search/Lucene/Index/SegmentInfo.php";s:4:"41fb";s:50:"Classes/Zend/Search/Lucene/Index/SegmentMerger.php";s:4:"7171";s:50:"Classes/Zend/Search/Lucene/Index/SegmentWriter.php";s:4:"38d3";s:41:"Classes/Zend/Search/Lucene/Index/Term.php";s:4:"29a5";s:45:"Classes/Zend/Search/Lucene/Index/TermInfo.php";s:4:"ae65";s:55:"Classes/Zend/Search/Lucene/Index/TermsPriorityQueue.php";s:4:"87ef";s:43:"Classes/Zend/Search/Lucene/Index/Writer.php";s:4:"0ab8";s:65:"Classes/Zend/Search/Lucene/Index/SegmentWriter/DocumentWriter.php";s:4:"25cd";s:63:"Classes/Zend/Search/Lucene/Index/SegmentWriter/StreamWriter.php";s:4:"eb44";s:58:"Classes/Zend/Search/Lucene/Index/TermsStream/Interface.php";s:4:"ae40";s:65:"Classes/Zend/Search/Lucene/Search/BooleanExpressionRecognizer.php";s:4:"0e83";s:43:"Classes/Zend/Search/Lucene/Search/Query.php";s:4:"c34c";s:48:"Classes/Zend/Search/Lucene/Search/QueryEntry.php";s:4:"d07f";s:46:"Classes/Zend/Search/Lucene/Search/QueryHit.php";s:4:"7144";s:48:"Classes/Zend/Search/Lucene/Search/QueryLexer.php";s:4:"b417";s:49:"Classes/Zend/Search/Lucene/Search/QueryParser.php";s:4:"147e";s:56:"Classes/Zend/Search/Lucene/Search/QueryParserContext.php";s:4:"0501";s:58:"Classes/Zend/Search/Lucene/Search/QueryParserException.php";s:4:"f5c0";s:48:"Classes/Zend/Search/Lucene/Search/QueryToken.php";s:4:"136f";s:48:"Classes/Zend/Search/Lucene/Search/Similarity.php";s:4:"4731";s:44:"Classes/Zend/Search/Lucene/Search/Weight.php";s:4:"e852";s:57:"Classes/Zend/Search/Lucene/Search/Highlighter/Default.php";s:4:"5280";s:59:"Classes/Zend/Search/Lucene/Search/Highlighter/Interface.php";s:4:"d26d";s:51:"Classes/Zend/Search/Lucene/Search/Query/Boolean.php";s:4:"c75f";s:49:"Classes/Zend/Search/Lucene/Search/Query/Empty.php";s:4:"cc7b";s:49:"Classes/Zend/Search/Lucene/Search/Query/Fuzzy.php";s:4:"95d2";s:57:"Classes/Zend/Search/Lucene/Search/Query/Insignificant.php";s:4:"a1d8";s:53:"Classes/Zend/Search/Lucene/Search/Query/MultiTerm.php";s:4:"9a0b";s:50:"Classes/Zend/Search/Lucene/Search/Query/Phrase.php";s:4:"e70d";s:57:"Classes/Zend/Search/Lucene/Search/Query/Preprocessing.php";s:4:"478d";s:49:"Classes/Zend/Search/Lucene/Search/Query/Range.php";s:4:"110c";s:48:"Classes/Zend/Search/Lucene/Search/Query/Term.php";s:4:"86f1";s:52:"Classes/Zend/Search/Lucene/Search/Query/Wildcard.php";s:4:"cd4e";s:63:"Classes/Zend/Search/Lucene/Search/Query/Preprocessing/Fuzzy.php";s:4:"d47d";s:64:"Classes/Zend/Search/Lucene/Search/Query/Preprocessing/Phrase.php";s:4:"bfc4";s:62:"Classes/Zend/Search/Lucene/Search/Query/Preprocessing/Term.php";s:4:"5842";s:55:"Classes/Zend/Search/Lucene/Search/QueryEntry/Phrase.php";s:4:"89c8";s:57:"Classes/Zend/Search/Lucene/Search/QueryEntry/Subquery.php";s:4:"d287";s:53:"Classes/Zend/Search/Lucene/Search/QueryEntry/Term.php";s:4:"efc6";s:56:"Classes/Zend/Search/Lucene/Search/Similarity/Default.php";s:4:"8f62";s:52:"Classes/Zend/Search/Lucene/Search/Weight/Boolean.php";s:4:"1446";s:50:"Classes/Zend/Search/Lucene/Search/Weight/Empty.php";s:4:"d842";s:54:"Classes/Zend/Search/Lucene/Search/Weight/MultiTerm.php";s:4:"1da2";s:51:"Classes/Zend/Search/Lucene/Search/Weight/Phrase.php";s:4:"de01";s:49:"Classes/Zend/Search/Lucene/Search/Weight/Term.php";s:4:"c4f0";s:48:"Classes/Zend/Search/Lucene/Storage/Directory.php";s:4:"7f11";s:43:"Classes/Zend/Search/Lucene/Storage/File.php";s:4:"1b63";s:59:"Classes/Zend/Search/Lucene/Storage/Directory/Filesystem.php";s:4:"9ace";s:54:"Classes/Zend/Search/Lucene/Storage/File/Filesystem.php";s:4:"dfd3";s:50:"Classes/Zend/Search/Lucene/Storage/File/Memory.php";s:4:"6dda";s:45:"Configuration/FlexForms/ControllerActions.xml";s:4:"ea9f";s:38:"Configuration/TypoScript/constants.txt";s:4:"bca6";s:34:"Configuration/TypoScript/setup.txt";s:4:"fe64";s:40:"Resources/Private/Language/locallang.xml";s:4:"d908";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"d6a0";s:41:"Resources/Private/Partials/Searchbox.html";s:4:"ffe0";s:48:"Resources/Private/Templates/Lucene/Notfound.html";s:4:"f5ac";s:47:"Resources/Private/Templates/Lucene/Results.html";s:4:"e68a";s:46:"Resources/Private/Templates/Lucene/Search.html";s:4:"d524";s:66:"Resources/Private/Templates/ViewHelpers/Widget/Paginate/Index.html";s:4:"5448";s:34:"Resources/Public/Icons/Wizicon.gif";s:4:"7bc4";s:46:"Resources/Public/Javascript/tw_lucenesearch.js";s:4:"b7a3";s:14:"doc/manual.pdf";s:4:"6ba2";s:14:"doc/manual.sxw";s:4:"f66f";}',
);

?>