<?php

/**
 * @file plugins/importexport/medra/MedraPlugin.php
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class MedraPlugin
 * @ingroup plugins_generic_medra
 *
 * @brief mEDRA Onix for DOI (O4DOI) export/registration plugin.
 */

namespace APP\plugins\generic\medra;

use APP\plugins\IDoiRegistrationAgency;
use PKP\context\Context;
use PKP\doi\RegistrationAgencySettings;
use PKP\plugins\GenericPlugin;

class MedraPlugin extends GenericPlugin implements IDoiRegistrationAgency
{

	/**
	 * @inheritDoc
	 */
	public function exportSubmissions(array $submissions, Context $context): array
	{
		// TODO: Implement exportSubmissions() method.
	}

	/**
	 * @inheritDoc
	 */
	public function depositSubmissions(array $submissions, Context $context): array
	{
		// TODO: Implement depositSubmissions() method.
	}

	/**
	 * @inheritDoc
	 */
	public function exportIssues(array $issues, Context $context): array
	{
		// TODO: Implement exportIssues() method.
	}

	/**
	 * @inheritDoc
	 */
	public function depositIssues(array $issues, Context $context): array
	{
		// TODO: Implement depositIssues() method.
	}

	/**
	 * @inheritDoc
	 */
	public function addAsRegistrationAgencyOption(string $hookName, array $args)
	{
		// TODO: Implement addAsRegistrationAgencyOption() method.
	}

	/**
	 * @inheritDoc
	 */
	public function isPluginConfigured(Context $context): bool
	{
		// TODO: Implement isPluginConfigured() method.
	}

	/**
	 * @inheritDoc
	 */
	public function getRegistrationAgencyName(): string
	{
		// TODO: Implement getRegistrationAgencyName() method.
	}

	/**
	 * @inheritDoc
	 */
	public function getErrorMessageKey(): ?string
	{
		// TODO: Implement getErrorMessageKey() method.
	}

	/**
	 * @inheritDoc
	 */
	public function getRegisteredMessageKey(): ?string
	{
		// TODO: Implement getRegisteredMessageKey() method.
	}

	/**
	 * @inheritDoc
	 */
	public function getSettingsObject(): RegistrationAgencySettings
	{
		// TODO: Implement getSettingsObject() method.
	}

	/**
	 * @inheritDoc
	 */
	public function getAllowedDoiTypes(): array
	{
		// TODO: Implement getAllowedDoiTypes() method.
	}

	/**
	 * @inheritDoc
	 */
	public function getDisplayName()
	{
		// TODO: Implement getDisplayName() method.
	}

	/**
	 * @inheritDoc
	 */
	public function getDescription()
	{
		// TODO: Implement getDescription() method.
	}
}
