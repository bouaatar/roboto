<?php
			$optionsArray = array(
	'captcha' => array(
		'captcha' => false 
	),
	'fields' => array(
		'gridFields' => array( 
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
			'Photo' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'prenom' => array( 
				'integrated_edit_field' 
			),
			'nom' => array( 
				'integrated_edit_field1' 
			),
			'date_naissance' => array( 
				'integrated_edit_field2' 
			),
			'sexe' => array( 
				'integrated_edit_field3' 
			),
			'ecole' => array( 
				'integrated_edit_field4' 
			),
			'niveau' => array( 
				'integrated_edit_field5' 
			),
			'telephonee' => array( 
				'integrated_edit_field6' 
			),
			'email' => array( 
				'integrated_edit_field7' 
			),
			'nom_parent' => array( 
				'integrated_edit_field8' 
			),
			'cin_parent' => array( 
				'integrated_edit_field9' 
			),
			'lien_parent' => array( 
				'integrated_edit_field10' 
			),
			'adresse' => array( 
				'integrated_edit_field11' 
			),
			'Photo' => array( 
				'integrated_edit_field13' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'add_message' 
				),
				'below-grid' => array( 
					'add_save',
					'add_reset',
					'add_cancel' 
				),
				'top' => array( 
					'image' 
				),
				'grid' => array( 
					'integrated_edit_field',
					'integrated_edit_field1',
					'integrated_edit_field2',
					'integrated_edit_field3',
					'integrated_edit_field13',
					'integrated_edit_field4',
					'integrated_edit_field5',
					'integrated_edit_field6',
					'integrated_edit_field7',
					'integrated_edit_field8',
					'integrated_edit_field9',
					'integrated_edit_field10',
					'integrated_edit_field11' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'message_block' 
				) 
			),
			'itemForms' => array(
				'add_message' => 'above-grid',
				'add_save' => 'below-grid',
				'add_reset' => 'below-grid',
				'add_cancel' => 'below-grid',
				'image' => 'top',
				'integrated_edit_field' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field2' => 'grid',
				'integrated_edit_field3' => 'grid',
				'integrated_edit_field13' => 'grid',
				'integrated_edit_field4' => 'grid',
				'integrated_edit_field5' => 'grid',
				'integrated_edit_field6' => 'grid',
				'integrated_edit_field7' => 'grid',
				'integrated_edit_field8' => 'grid',
				'integrated_edit_field9' => 'grid',
				'integrated_edit_field10' => 'grid',
				'integrated_edit_field11' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field3' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field13' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field4' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field5' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field6' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field7' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field9' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field10' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field11' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'add_cancel' => array( 
				'add_cancel' 
			),
			'add_message' => array( 
				'add_message' 
			),
			'add_save' => array( 
				'add_save' 
			),
			'add_reset' => array( 
				'add_reset' 
			),
			'integrated_edit_field' => array( 
				'integrated_edit_field',
				'integrated_edit_field1',
				'integrated_edit_field2',
				'integrated_edit_field3',
				'integrated_edit_field4',
				'integrated_edit_field5',
				'integrated_edit_field6',
				'integrated_edit_field7',
				'integrated_edit_field8',
				'integrated_edit_field9',
				'integrated_edit_field10',
				'integrated_edit_field11',
				'integrated_edit_field13' 
			),
			'image' => array( 
				'image' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field',
							'integrated_edit_field1',
							'integrated_edit_field2',
							'integrated_edit_field3',
							'integrated_edit_field13',
							'integrated_edit_field4',
							'integrated_edit_field5',
							'integrated_edit_field6',
							'integrated_edit_field7',
							'integrated_edit_field8',
							'integrated_edit_field9',
							'integrated_edit_field10',
							'integrated_edit_field11' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			) 
		) 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'add',
		'breadcrumb' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'add',
	'type' => 'add',
	'layoutId' => 'nomenu',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'add-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'add_message' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'add-below-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'add_save',
						'add_reset',
						'add_cancel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'add-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'image' 
					),
					'align' => 'center' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c3' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field',
						'integrated_edit_field1',
						'integrated_edit_field2',
						'integrated_edit_field3',
						'integrated_edit_field13',
						'integrated_edit_field4',
						'integrated_edit_field5',
						'integrated_edit_field6',
						'integrated_edit_field7',
						'integrated_edit_field8',
						'integrated_edit_field9',
						'integrated_edit_field10',
						'integrated_edit_field11' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => false,
			'separateLabels' => false 
		) 
	),
	'items' => array(
		'add_cancel' => array(
			'type' => 'add_cancel',
			'icon' => array(
				 
			) 
		),
		'add_message' => array(
			'type' => 'add_message' 
		),
		'add_save' => array(
			'type' => 'add_save' 
		),
		'add_reset' => array(
			'type' => 'add_reset',
			'icon' => array(
				 
			) 
		),
		'integrated_edit_field' => array(
			'field' => 'prenom',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field1' => array(
			'field' => 'nom',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field2' => array(
			'field' => 'date_naissance',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field3' => array(
			'field' => 'sexe',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field4' => array(
			'field' => 'ecole',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field5' => array(
			'field' => 'niveau',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field6' => array(
			'field' => 'telephonee',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field7' => array(
			'field' => 'email',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field8' => array(
			'field' => 'nom_parent',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field9' => array(
			'field' => 'cin_parent',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field10' => array(
			'field' => 'lien_parent',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field11' => array(
			'field' => 'adresse',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field13' => array(
			'field' => 'Photo',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'image' => array(
			'type' => 'image',
			'image' => array(
				'image' => 'BAR.fw.png',
				'source' => 2 
			) 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		'French' => 'Formation modèle en robotique et en programmation' 
	) 
);
		?>