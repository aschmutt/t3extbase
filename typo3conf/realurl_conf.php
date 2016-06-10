<?php
/**
* Real Url config for tt_news
*
* This config file includes the new GETvars 'month' and 'day' (available since tt_news 2.2.0)
* and it does not include a configuration for the tt_news backPid.
*
* this configuration requires that tt_news is configured to use this options:
*
* plugin.tt_news {
*   dontUseBackPid = 1
*   useHRDates = 1
* }
*
* see section "RealUrl and SimulateStaticDocuments" in the tt_news manual for more information.
* http://typo3.org/documentation/document-library/tt_news/
*
*/

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = array(
     '_DEFAULT' => array(
          'init' => array(
               'enableCHashCache' => 1,
               'appendMissingSlash' => 'ifNotFile',
               'enableUrlDecodeCache' => 1,
               'enableUrlEncodeCache' => 1,
          ),
          'redirects' => array(),
          'preVars' => array(
               array(
                    'GETvar' => 'no_cache',
                    'valueMap' => array(
                         'nc' => 1,
                    ),
                    'noMatch' => 'bypass',
               ),
               array(
                    'GETvar' => 'L',
                    'valueMap' => array(
                         'en' => '1',
                    ),
                    'noMatch' => 'bypass',
               ),
               array(
                    'GETvar' => 'type',
                    'valueMap' => array(
                         'print' => '98',
                    ),
                    'noMatch' => 'bypass',
               ),
          ),
          'pagePath' => array(
               'spaceCharacter' => '-',
               'expireDays' => 7,
               'rootpage_id' => 1,
          ),
          'fixedPostVars' => array(),
          'postVarSets' => array(
               '_DEFAULT' => array(
                   
                    // EXT:news start
                    'news' => array(
                            array(
                                    'GETvar' => 'tx_news_pi1[action]',
                            ),
                            array(
                                    'GETvar' => 'tx_news_pi1[controller]',
                            ),
                            array(
                                    'GETvar' => 'tx_news_pi1[news]',
                                    'lookUpTable' => array(
                                            'table' => 'tx_news_domain_model_news',
                                            'id_field' => 'uid',
                                            'alias_field' => 'CONCAT(title,\'-\',uid)',
                                            'addWhereClause' => ' AND NOT deleted',
                                            'useUniqueCache' => 1,
                                            'useUniqueCache_conf' => array(
                                                    'strtolower' => 1,
                                                    'spaceCharacter' => '-',
                                            ),
                                            'languageGetVar' => 'L',
                                            'languageExceptionUids' => '',
                                            'languageField' => 'sys_language_uid',
                                            'transOrigPointerField' => 'l10n_parent',
                                            'autoUpdate' => 1,
                                            'expireDays' => 180,
                                    ),
                            ),
                    ),
                    // EXT:news end
                   
                    // news archive parameters
                    'archive' => array(
                         array(
                              'GETvar' => 'tx_ttnews[year]' ,
                              ),
                         array(
                              'GETvar' => 'tx_ttnews[month]' ,
                              'valueMap' => array(
                                   'january' => '01',
                                   'february' => '02',
                                   'march' => '03',
                                   'april' => '04',
                                   'may' => '05',
                                   'june' => '06',
                                   'july' => '07',
                                   'august' => '08',
                                   'september' => '09',
                                   'october' => '10',
                                   'november' => '11',
                                   'december' => '12',
                                   )
                              ),
                         ),
                    // news pagebrowser
                    'browse' => array(
                         array(
                              'GETvar' => 'tx_ttnews[pointer]',
                              ),
                         ),

                   
                    // news categories
                    'select_category' => array (
                         array(
                              'GETvar' => 'tx_ttnews[cat]',
                              ),
                         ),
                    // news articles and searchwords
                    'artikel' => array(
                         array(
                              'GETvar' => 'tx_ttnews[tt_news]',
                              'lookUpTable' => array(
                                   'table' => 'tt_news',
                                   'id_field' => 'uid',
                                   'alias_field' => 'title',
                                   'addWhereClause' => ' AND NOT deleted',
                                   'useUniqueCache' => 1,
                                   'useUniqueCache_conf' => array(
                                        'strtolower' => 1,
                                        'spaceCharacter' => '-',
                                        ),
                                   ),
                              ),
                         array(
                              'GETvar' => 'tx_ttnews[swords]',
                              ),
                         ),
                    ),
               ),
          // configure filenames for different pagetypes
          'fileName' => array(
                  'defaultToHTMLsuffixOnPrev' => 1,
                  'acceptHTMLsuffix' => 1,
               'index' => array(
                    'rss.xml' => array(
                         'keyValues' => array(
                              'type' => 100,
                         ),
                    ),
                    'rss091.xml' => array(
                         'keyValues' => array(
                              'type' => 101,
                         ),
                    ),
                    'rdf.xml' => array(
                         'keyValues' => array(
                              'type' => 102,
                         ),
                    ),
                    'atom.xml' => array(
                         'keyValues' => array(
                              'type' => 103,
                         ),
                    ),
                    'output.pdf' => array(
                         'keyValues' => array(
                              'type' => 123,
                         ),
                    ),
                    'sitemap.xml' => array(
                         'keyValues' => array(
                              'type' => 841132,
                         ),
                    ),

               ),
          ),
     ),
);

?>
