<?php

/**
 * @file plugins/importexport/medra/filter/GalleyMedraXmlFilter.php
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2000-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class GalleyMedraXmlFilter
 * @ingroup plugins_importexport_medra
 *
 * @brief Class that converts an ArticleGalley i.e article as manifestation to a O4DOI XML document.
 */

namespace APP\plugins\generic\medra\filter;

use PKP\filter\FilterGroup;

class GalleyMedraXmlFilter extends ArticleMedraXmlFilter {
	/**
	 * Constructor
	 * @param $filterGroup FilterGroup
	 */
	function __construct($filterGroup) {
		$this->setDisplayName('mEDRA XML galley export');
		parent::__construct($filterGroup);
	}

	/**
	 * @copydoc O4DOIXmlFilter::isWork()
	 */
	function isWork($context, $plugin) {
		return false;
	}

	/**
	 *  @copydoc O4DOIXmlFilter::getRootNodeName
	 */
	function getRootNodeName() {
		return 'ONIXDOISerialArticleVersionRegistrationMessage';
	}

	//
	// Implement template methods from PersistableFilter
	//
	/**
	 * @copydoc PersistableFilter::getClassName()
	 */
	function getClassName() {
		return 'plugins.importexport.medra.filter.GalleyMedraXmlFilter';
	}

}


