<?php
	// Include the classfile for UserEditPanelBase
	require(__PANELBASE_CLASSES__ . '/UserEditPanelBase.class.php');

	/**
	 * This is a quick-and-dirty draft panel object to do Create, Edit, and Delete functionality
	 * of the User class.  It extends from the code-generated
	 * abstract UserEditPanelBase class.
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
	class UserEditPanel extends UserEditPanelBase {
		// Specify the Location of the Template (feel free to modify) for this Panel


		public function __construct($objParentObject, $strClosePanelMethod, $objUser = null, $strControlId = null) {
			try {
                $this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . "/generated/UserEditPanel.tpl.php";
				parent::__construct($objParentObject, $strClosePanelMethod, $objUser, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

	}
?>