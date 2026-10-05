<?php
global $runnerTableSettings;
$runnerTableSettings['seance_l1_ins'] = array(
	'name' => 'seance_l1_ins',
	'shortName' => 'seance_l1_ins',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'seance_l1_ins',
	'afterAddDetail' => 'seance_l1_ins',
	'detailsBadgeColor' => '6da5c8',
	'sql' => 'SELECT
	id,
	prenom,
	nom,
	date_naissance,
	sexe,
	Photo,
	ecole,
	niveau,
	telephonee,
	email,
	nom_parent,
	cin_parent,
	lien_parent,
	adresse,
	date_inscription
FROM
	seance_l1_ins',
	'keyFields' => array( 
		'id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'goodName' => 'id',
			'strField' => 'id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'prenom' => array(
			'name' => 'prenom',
			'goodName' => 'prenom',
			'strField' => 'prenom',
			'index' => 2,
			'sqlExpression' => 'prenom',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'nom' => array(
			'name' => 'nom',
			'goodName' => 'nom',
			'strField' => 'nom',
			'index' => 3,
			'sqlExpression' => 'nom',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'date_naissance' => array(
			'name' => 'date_naissance',
			'goodName' => 'date_naissance',
			'strField' => 'date_naissance',
			'index' => 4,
			'type' => 7,
			'sqlExpression' => 'date_naissance',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'sexe' => array(
			'name' => 'sexe',
			'goodName' => 'sexe',
			'strField' => 'sexe',
			'index' => 5,
			'sqlExpression' => 'sexe',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Masculin',
						'Féminin' 
					) 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'ecole' => array(
			'name' => 'ecole',
			'goodName' => 'ecole',
			'strField' => 'ecole',
			'index' => 7,
			'sqlExpression' => 'ecole',
			'viewFormats' => array(
				'view' => array(
					 
				),
				'list' => array(
					'pageType' => 'list' 
				),
				'print' => array(
					'pageType' => 'print' 
				),
				'export' => array(
					'pageType' => 'export' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				),
				'add' => array(
					'format' => 'Lookup wizard',
					'pageType' => 'add',
					'lookupType' => 0,
					'lookupValues' => array( 
						'مدرسة بوهلال الإبتدائية - Ecole BOUHLAL',
						'مؤسسة أخرى - Autre..' 
					) 
				),
				'search' => array(
					'pageType' => 'search' 
				) 
			),
			'separateEditViewFormats' => true,
			'tableName' => 'seance_l1_ins' 
		),
		'niveau' => array(
			'name' => 'niveau',
			'goodName' => 'niveau',
			'strField' => 'niveau',
			'index' => 8,
			'sqlExpression' => 'niveau',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'4 CE',
						'5 CE',
						'6 CE' 
					) 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'telephonee' => array(
			'name' => 'telephonee',
			'goodName' => 'telephonee',
			'strField' => 'telephonee',
			'index' => 9,
			'sqlExpression' => 'telephonee',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'index' => 10,
			'sqlExpression' => 'email',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'nom_parent' => array(
			'name' => 'nom_parent',
			'goodName' => 'nom_parent',
			'strField' => 'nom_parent',
			'index' => 11,
			'sqlExpression' => 'nom_parent',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'cin_parent' => array(
			'name' => 'cin_parent',
			'goodName' => 'cin_parent',
			'strField' => 'cin_parent',
			'index' => 12,
			'sqlExpression' => 'cin_parent',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'lien_parent' => array(
			'name' => 'lien_parent',
			'goodName' => 'lien_parent',
			'strField' => 'lien_parent',
			'index' => 13,
			'sqlExpression' => 'lien_parent',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'أب - père',
						'أم - mère',
						'ولي امر - tuteur' 
					) 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'adresse' => array(
			'name' => 'adresse',
			'goodName' => 'adresse',
			'strField' => 'adresse',
			'index' => 14,
			'sqlExpression' => 'adresse',
			'viewFormats' => array(
				'view' => array(
					 
				),
				'list' => array(
					'pageType' => 'list' 
				),
				'print' => array(
					'pageType' => 'print' 
				),
				'export' => array(
					'pageType' => 'export' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				),
				'add' => array(
					'pageType' => 'add' 
				),
				'search' => array(
					'pageType' => 'search' 
				) 
			),
			'separateEditViewFormats' => true,
			'tableName' => 'seance_l1_ins' 
		),
		'date_inscription' => array(
			'name' => 'date_inscription',
			'goodName' => 'date_inscription',
			'strField' => 'date_inscription',
			'index' => 15,
			'type' => 135,
			'sqlExpression' => 'date_inscription',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => 'now()',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'seance_l1_ins' 
		),
		'Photo' => array(
			'name' => 'Photo',
			'goodName' => 'Photo',
			'strField' => 'Photo',
			'index' => 6,
			'sqlExpression' => 'Photo',
			'viewFormats' => array(
				'view' => array(
					'format' => 'File-based Image',
					'imageWidth' => 200,
					'imageHeight' => 120 
				),
				'list' => array(
					'format' => 'File-based Image',
					'pageType' => 'list',
					'imageWidth' => 60,
					'imageHeight' => 40 
				),
				'print' => array(
					'format' => 'File-based Image',
					'pageType' => 'print' 
				),
				'export' => array(
					'format' => 'File-based Image',
					'pageType' => 'export' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Document upload' 
				),
				'add' => array(
					'format' => 'Document upload',
					'pageType' => 'add' 
				),
				'search' => array(
					'pageType' => 'search' 
				) 
			),
			'separateEditViewFormats' => true,
			'tableName' => 'seance_l1_ins' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	prenom,
	nom,
	date_naissance,
	sexe,
	Photo,
	ecole,
	niveau,
	telephonee,
	email,
	nom_parent,
	cin_parent,
	lien_parent,
	adresse,
	date_inscription
FROM
	seance_l1_ins',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'prenom',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'prenom' 
				),
				'encrypted' => false,
				'columnName' => 'prenom' 
			),
			array(
				'sql' => 'nom',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'nom' 
				),
				'encrypted' => false,
				'columnName' => 'nom' 
			),
			array(
				'sql' => 'date_naissance',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'date_naissance' 
				),
				'encrypted' => false,
				'columnName' => 'date_naissance' 
			),
			array(
				'sql' => 'sexe',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'sexe' 
				),
				'encrypted' => false,
				'columnName' => 'sexe' 
			),
			array(
				'sql' => 'Photo',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'Photo' 
				),
				'encrypted' => false,
				'columnName' => 'Photo' 
			),
			array(
				'sql' => 'ecole',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'ecole' 
				),
				'encrypted' => false,
				'columnName' => 'ecole' 
			),
			array(
				'sql' => 'niveau',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'niveau' 
				),
				'encrypted' => false,
				'columnName' => 'niveau' 
			),
			array(
				'sql' => 'telephonee',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'telephonee' 
				),
				'encrypted' => false,
				'columnName' => 'telephonee' 
			),
			array(
				'sql' => 'email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'email' 
				),
				'encrypted' => false,
				'columnName' => 'email' 
			),
			array(
				'sql' => 'nom_parent',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'nom_parent' 
				),
				'encrypted' => false,
				'columnName' => 'nom_parent' 
			),
			array(
				'sql' => 'cin_parent',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'cin_parent' 
				),
				'encrypted' => false,
				'columnName' => 'cin_parent' 
			),
			array(
				'sql' => 'lien_parent',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'lien_parent' 
				),
				'encrypted' => false,
				'columnName' => 'lien_parent' 
			),
			array(
				'sql' => 'adresse',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'adresse' 
				),
				'encrypted' => false,
				'columnName' => 'adresse' 
			),
			array(
				'sql' => 'date_inscription',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'seance_l1_ins',
					'name' => 'date_inscription' 
				),
				'encrypted' => false,
				'columnName' => 'date_inscription' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'seance_l1_ins',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'seance_l1_ins',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'prenom',
						'nom',
						'date_naissance',
						'sexe',
						'Photo',
						'ecole',
						'niveau',
						'telephonee',
						'email',
						'nom_parent',
						'cin_parent',
						'lien_parent',
						'adresse',
						'date_inscription' 
					),
					'name' => 'seance_l1_ins' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'link' => 0 
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 12,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 13,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 14,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	prenom,
	nom,
	date_naissance,
	sexe,
	Photo,
	ecole,
	niveau,
	telephonee,
	email,
	nom_parent,
	cin_parent,
	lien_parent,
	adresse,
	date_inscription',
		'fromListSql' => 'FROM
	seance_l1_ins',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'seance_l1_ins',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'id',
			'prenom',
			'nom',
			'date_naissance',
			'sexe',
			'ecole',
			'niveau',
			'telephonee',
			'email',
			'nom_parent',
			'cin_parent',
			'lien_parent',
			'adresse',
			'date_inscription',
			'Photo' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'prenom',
			'nom',
			'date_naissance',
			'sexe',
			'ecole',
			'niveau',
			'telephonee',
			'email',
			'nom_parent',
			'cin_parent',
			'lien_parent',
			'adresse',
			'date_inscription',
			'Photo' 
		) 
	),
	'connId' => 'conn',
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'Arabic' ) {
	$runnerTableLabels['seance_l1_ins'] = array(
	'tableCaption' => 'Seance L1 Ins',
	'fieldLabels' => array(
		'id' => 'قن',
		'prenom' => 'الاسم',
		'nom' => 'النسب',
		'date_naissance' => 'تاريخ الازدياد',
		'sexe' => 'الجنس',
		'ecole' => 'اسم المدرسة',
		'niveau' => 'القسم',
		'telephonee' => 'الهاتف',
		'email' => 'البريد الاكتروني',
		'nom_parent' => 'الاسم الكامل لولي الامر',
		'cin_parent' => 'رقم بطاقة التعريف الوطنية',
		'lien_parent' => 'الصفة ',
		'adresse' => 'العنوان',
		'date_inscription' => 'تاريخ التسجيل',
		'Photo' => 'صورة التلميذ' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'prenom' => '',
		'nom' => '',
		'date_naissance' => '',
		'sexe' => '',
		'ecole' => '',
		'niveau' => '',
		'telephonee' => '',
		'email' => '',
		'nom_parent' => '',
		'cin_parent' => '',
		'lien_parent' => '',
		'adresse' => '',
		'date_inscription' => '',
		'Photo' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'prenom' => '',
		'nom' => '',
		'date_naissance' => '',
		'sexe' => '',
		'ecole' => '',
		'niveau' => '',
		'telephonee' => '',
		'email' => '',
		'nom_parent' => '',
		'cin_parent' => '',
		'lien_parent' => '',
		'adresse' => '',
		'date_inscription' => '',
		'Photo' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
if( mlang_getcurrentlang() === 'French' ) {
	$runnerTableLabels['seance_l1_ins'] = array(
	'tableCaption' => 'Seance L1 Ins',
	'fieldLabels' => array(
		'id' => 'Id',
		'prenom' => 'Prénom',
		'nom' => 'Nom',
		'date_naissance' => 'Date de Naissance',
		'sexe' => 'Sexe',
		'ecole' => 'Ecole',
		'niveau' => 'Classe',
		'telephonee' => 'Téléphonee',
		'email' => 'Email',
		'nom_parent' => 'Nom complet (Pére/Mère,,)',
		'cin_parent' => 'N° CIN',
		'lien_parent' => 'Lien Parental',
		'adresse' => 'Adresse',
		'date_inscription' => 'Date d\'Inscription',
		'Photo' => 'Photo' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'prenom' => '',
		'nom' => '',
		'date_naissance' => '',
		'sexe' => '',
		'ecole' => '',
		'niveau' => '',
		'telephonee' => '',
		'email' => '',
		'nom_parent' => '',
		'cin_parent' => '',
		'lien_parent' => '',
		'adresse' => '',
		'date_inscription' => '',
		'Photo' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'prenom' => '',
		'nom' => '',
		'date_naissance' => '',
		'sexe' => '',
		'ecole' => '',
		'niveau' => '',
		'telephonee' => '',
		'email' => '',
		'nom_parent' => '',
		'cin_parent' => '',
		'lien_parent' => '',
		'adresse' => '',
		'date_inscription' => '',
		'Photo' => '' 
	),
	'pageTitles' => array(
		'add' => 'Formation modèle en robotique et en programmation' 
	) 
);
}
?>