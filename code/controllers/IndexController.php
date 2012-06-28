<?php

//Tutorial: http://alanstorm.com/magento_admin_controllers

class GlobalThinking_AdminHelloWorld_IndexController extends Mage_Adminhtml_Controller_Action
{
	//bcentra.local/magento/index.php/adminhelloworld/index/index
	public function indexAction()
	{
		//Load the default admin layout (no frills)
		$this->loadLayout();
		
		//Add a left block
		$this->_addLeft($this->getLayout()->createBlock('core/text')->setText('<h1>Left Block</h1>'));
		
		//Create a text block with the name "example-block"
		$block = $this->getLayout()->createBlock('core/text', 'example-block')->setText('<h1>This is the main text block!</h1>');
		
		//Add the block to the layout
		$this->_addContent($block);
		
		//Add a javascript block (added to the bottom of the page)
		$jsBlock = $this->getLayout()->createBlock('core/text')->setText('<script type="text/javascript">alert("BAM!");</script>');
		$this->_addJs($jsBlock);
		
		//Set the "tutorial menu" as the active menu item (use names from config.xml)
		$this->_setActiveMenu('tutorial_menu/first_page');
		
		//Render the layout
		$this->renderLayout();
	}
	
	//bcentra.local/magento/index.php/adminhelloworld/index/another
	public function anotherAction()
	{
		echo "Something else happened!";
	}
}

?>