<?php
	// Include the classfile for TutorialEditPanelBase
	require(__PANELBASE_CLASSES__ . '/TutorialEditPanelBase.class.php');

	/**
	 * This is a quick-and-dirty draft panel object to do Create, Edit, and Delete functionality
	 * of the Tutorial class.  It extends from the code-generated
	 * abstract TutorialEditPanelBase class.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * Additional qform control objects can also be defined and used here, as well.
	 * 
	 * @package My Application
	 * @subpackage PanelDraftObjects
	 * 
	 */
	class TutorialEditPanel extends TutorialEditPanelBase {
		// Specify the Location of the Template (feel free to modify) for this Panel


		public function __construct($objParentObject, $strClosePanelMethod, $objTutorial = null, $strControlId = null) {
			try {
                $this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . "/generated/TutorialEditPanel.tpl.php";
				parent::__construct($objParentObject, $strClosePanelMethod, $objTutorial, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

	}
?>