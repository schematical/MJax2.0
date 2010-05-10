<?php
	// Include the classfile for TutorialListPanelBase
	require(__PANELBASE_CLASSES__ . '/TutorialListPanelBase.class.php');

	/**
	 * This is a quick-and-dirty draft panel object to do the List All functionality
	 * of the Tutorial class.  It extends from the code-generated
	 * abstract TutorialListPanelBase class.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 *
	 * Additional qpanel control objects can also be defined and used here, as well.
	 * 
	 * @package My Application
	 * @subpackage PanelDraftObjects
	 * 
	 */
	class TutorialListPanel extends TutorialListPanelBase {
		// Specify the Location of the Template (feel free to modify) for this Panel
		

		// Override Control methods as Needed

		public function __construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId = null) {
			// Call the Parent
			try {
                $this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . "/generated/TutorialListPanel.tpl.php";
				parent::__construct($objParentObject, $strSetEditPanelMethod, $strCloseEditPanelMethod, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

	}
?>