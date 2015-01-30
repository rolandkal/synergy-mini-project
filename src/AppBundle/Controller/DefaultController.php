<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    
    /**
     * @Route("/", name="grid")
     */
    public function gridAction()
    {
	    $defaults = array(
		    "grid" => array("rows" => 3, "columns" => 5),
		    "computers" => array(
		    	
		    	"Mac" => '<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  viewBox="0 0 26 25" xml:space="preserve">
<g><path d="M18,23h-2h0v-1c0-0.551-0.449-1-1-1h-4c-0.551,0-1,1-1,1v1H8c-0.551,0-1,1-1,1v1h12v-1C19,23.449,18.551,23,18,23z"></path><path d="M16.566,6.974c-0.459-0.571-1.102-0.902-1.709-0.902c-0.804,0-1.143,0.383-1.701,0.383c-0.574,0-1.011-0.382-1.705-0.382		c-0.682,0-1.409,0.415-1.869,1.123c-0.648,0.997-0.537,2.872,0.512,4.472c0.376,0.571,0.877,1.213,1.533,1.219c0.582,0.006,0.748-0.371,1.538-0.375c0.791-0.006,0.94,0.379,1.523,0.374c0.656-0.005,1.185-0.718,1.56-1.289c0.269-0.409,0.369-0.616,0.578-1.079h0C15.309,9.943,15.064,7.798,16.566,6.974z"></path><path d="M14.248,5.434L14.248,5.434c0.291-0.375,0.514-0.904,0.434-1.444c-0.478,0.032-1.035,0.337-1.361,0.731c-0.295,0.359-0.539,0.893-0.444,1.409C13.396,6.146,13.936,5.836,14.248,5.434z"></path><path d="M23,0H3C1.344,0,0,1.344,0,3v14c0,1.656,1.344,3,3,3h20c1.656,0,3-1.344,3-3V3C26,1.344,24.656,0,23,0z M13,18.953c-0.803,0-1.453-0.65-1.453-1.453c0-0.803,0.65-1.453,1.453-1.453s1.453,0.65,1.453,1.453C14.453,18.303,13.803,18.953,13,18.953zM24,14c0,0.551-0.449,1-1,1H3c-0.551,0-1-0.449-1-1V3c0-0.551,0.449-1,1-1h20c0.551,0,1,0.449,1,1V14z"></path></g></svg>', 
		    	
		    	"Linux" => '<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26 25" xml:space="preserve"><g><path d="M16.345,12.17L16.345,12.17c-0.109-0.063-0.395-0.291-0.536-0.516c-0.086-0.139,0.037-0.361-0.082-0.533c-0.07-0.104-0.197-0.061-0.217-0.061c-0.021,0-0.129,0.191-0.174,0.247c-0.046,0.058-0.17,0.157-0.258,0.212c-0.088,0.056-0.156,0.087-0.345,0.073c-0.187-0.016-0.241-0.079-0.3-0.128c-0.06-0.053-0.119-0.092-0.107-0.217c0.014-0.124,0.029-0.212-0.01-0.25c-0.04-0.041-0.096-0.049-0.218-0.049c-0.122,0-0.146,0.004-0.249,0.069c-0.057,0.034-0.061,0.263-0.061,0.53c0,0.213,0.002,0.451-0.018,0.645c-0.045,0.449-0.136,0.713-0.144,1.003c-0.009,0.29,0.089,0.485,0.177,0.562c0.087,0.079,0.216,0.139,0.5,0.139c0.285,0,0.463-0.063,0.65-0.25c0.121-0.122,0.249-0.234,0.62-0.489c0.295-0.2,0.738-0.421,0.827-0.509c0.043-0.044,0.121-0.086,0.128-0.244C16.534,12.264,16.423,12.219,16.345,12.17z"></path><path d="M10.713,11.326c-0.182-0.16-0.301-0.25-0.416-0.346c-0.008-0.006-0.014-0.012-0.021-0.018c0.102,0.121,0.221,0.282,0.361,0.502c0.08,0.127,0.133,0.213,0.189,0.305c0.068,0.111,0.146,0.237,0.289,0.463c0.023,0.037,0.046,0.07,0.068,0.104c0.08-0.016,0.157-0.045,0.193-0.096c0.086-0.129,0.035-0.274-0.021-0.366C11.302,11.784,10.904,11.493,10.713,11.326z"></path><path d="M10.98,12.297c-0.262-0.416-0.305-0.492-0.479-0.767c-0.174-0.272-0.519-0.766-0.715-0.771c-0.157-0.004-0.246,0.081-0.343,0.18c-0.099,0.099-0.218,0.353-0.39,0.477c-0.174,0.124-0.609,0.112-0.721,0.259c-0.108,0.145,0.005,0.355,0.002,0.746c0,0.166-0.028,0.292-0.047,0.394c-0.027,0.128-0.045,0.218,0.009,0.31c0.099,0.163,0.255,0.203,1.151,0.391c0.48,0.1,0.934,0.357,1.238,0.383c0.305,0.022,0.369-0.078,0.555-0.243c0.184-0.165,0.243-0.112,0.237-0.475C11.474,12.819,11.242,12.712,10.98,12.297L10.98,12.297z"></path><path d="M11.466,7.296c0.141,0.116,0.263,0.262,0.351,0.293c0.089,0.032,0.245,0.026,0.355,0.026c0.249,0,0.57-0.311,0.75-0.367c0.224-0.07,0.302-0.191,0.319-0.461c0.013-0.192-0.219-0.248-0.444-0.311c0.066-0.011,0.135-0.049,0.177-0.106c0.046-0.06,0.064-0.146,0.052-0.22c-0.029-0.165-0.113-0.293-0.256-0.293c-0.062,0-0.134,0.01-0.175,0.053c-0.054,0.06-0.084,0.135-0.084,0.24c0,0.069,0.004,0.157,0.024,0.222c-0.022-0.015-0.047-0.03-0.072-0.05c-0.088-0.065-0.279-0.1-0.419-0.082c-0.1,0.012-0.161,0.002-0.257,0.049c-0.023,0.013-0.049,0.028-0.075,0.045c0.011-0.053,0.015-0.113,0.015-0.173c0-0.082-0.028-0.154-0.063-0.206c-0.035-0.052-0.107-0.09-0.165-0.09c-0.062,0-0.106,0.024-0.14,0.078c-0.05,0.072-0.037,0.155-0.037,0.213c0,0.092,0.063,0.202,0.084,0.226c0.052,0.054,0.065,0.093,0.107,0.103c-0.023,0.018-0.043,0.036-0.061,0.053c-0.158,0.134-0.269,0.191-0.262,0.361C11.194,7.059,11.324,7.182,11.466,7.296L11.466,7.296z M12.797,5.947c0.016-0.016,0.049,0,0.086,0.041c0.037,0.041,0.037,0.077,0.007,0.099c-0.029,0.024-0.04-0.037-0.06-0.06v0C12.796,5.994,12.768,5.976,12.797,5.947z M12.309,6.366c0.03,0.019,0.053,0.075,0.023,0.09C12.319,6.463,12.3,6.46,12.265,6.441c-0.036-0.021-0.09-0.027-0.111-0.07C12.143,6.344,12.281,6.348,12.309,6.366z M11.819,6.371c0.076-0.011,0.096,0.011,0.048,0.041c-0.011,0.008-0.043,0.029-0.069,0.049c-0.023,0.024-0.07-0.008-0.064-0.025C11.742,6.418,11.742,6.387,11.819,6.371z M11.51,5.965c0.011-0.021,0.065-0.016,0.088,0.023c0.024,0.041,0.028,0.136,0.015,0.14c-0.033,0.013-0.031-0.044-0.062-0.081h0C11.521,6.01,11.499,5.988,11.51,5.965z M11.24,6.963c-0.007-0.022,0.025-0.024,0.037-0.021c0.036,0.024,0.144,0.129,0.206,0.167c0.017,0.015,0.06,0.041,0.104,0.058c0.073,0.026,0.151,0.054,0.219,0.054c0.059,0,0.158,0.001,0.235-0.004c0.08-0.006,0.188-0.048,0.268-0.083c0.176-0.076,0.297-0.143,0.473-0.25c0.182-0.109,0.237-0.148,0.292-0.121c0.056,0.027-0.103,0.119-0.229,0.189c-0.13,0.075-0.173,0.111-0.358,0.203c-0.187,0.089-0.365,0.149-0.509,0.149c-0.061,0-0.155,0.003-0.256-0.01c0,0-0.105-0.024-0.148-0.045c-0.071-0.037-0.153-0.089-0.22-0.143h0C11.301,7.063,11.26,7.025,11.24,6.963z"></path><path d="M12.494,12.882c-0.443,0.083-0.731,0.063-0.913,0.015c0.036,0.086,0.057,0.182,0.059,0.299c0.002,0.102-0.002,0.18-0.014,0.244c0.113-0.03,0.213-0.018,0.61-0.041c0.571-0.033,0.776-0.06,1.247,0.049c-0.012-0.072-0.017-0.151-0.014-0.237c0.003-0.161,0.031-0.311,0.064-0.483c0.023-0.129,0.05-0.273,0.07-0.443C13.332,12.539,12.963,12.795,12.494,12.882L12.494,12.882z"></path><path d="M9.43,10.753c0.087-0.073,0.199-0.136,0.36-0.132c0.045,0,0.133,0.004,0.285,0.136c-0.043-0.056-0.08-0.109-0.096-0.144c-0.062-0.134-0.089-0.296-0.064-0.523c0.034-0.31,0.139-0.556,0.261-0.816c0.046-0.097,0.179-0.345,0.202-0.319c0.027,0.033-0.078,0.11-0.221,0.454c-0.133,0.319-0.181,0.457-0.202,0.703c-0.02,0.215,0.01,0.393,0.072,0.516c0.032,0.064,0.095,0.138,0.152,0.201c-0.007-0.045-0.01-0.111-0.014-0.217c-0.013-0.384,0.068-0.568,0.132-0.855c0.055-0.241,0.258-0.529,0.369-0.785c0.078-0.07,0.118-0.125,0.185-0.164c0.129-0.072,0.312-0.097,0.323-0.15c0.011-0.053-0.221-0.083-0.268-0.242c-0.015-0.053-0.005-0.102,0.012-0.165c0.034-0.071,0.071-0.141,0.113-0.207c0.158-0.239,0.23-0.251,0.23-0.409c0-0.195,0.004-0.228,0.023-0.369c-0.103-0.099-0.187-0.216-0.191-0.363c-0.006-0.186,0.1-0.273,0.221-0.373c0.005-0.004,0.01-0.008,0.016-0.012c-0.02-0.031-0.037-0.064-0.05-0.102c-0.051-0.152-0.07-0.238-0.064-0.465c0.002-0.084,0.025-0.165,0.054-0.228c0.044-0.094,0.108-0.157,0.158-0.165c0.086-0.016,0.224-0.01,0.311,0.109c0.089,0.125,0.148,0.19,0.148,0.381c0,0.044,0,0.082-0.004,0.114c0.029-0.005,0.056-0.006,0.082-0.008c0.019-0.001,0.041-0.003,0.064-0.006c0.027-0.003,0.057-0.005,0.087-0.005c0.051,0,0.111,0.005,0.173,0.018c-0.002-0.021-0.004-0.045-0.004-0.069c-0.004-0.184-0.017-0.163,0.046-0.309c0.059-0.134,0.184-0.321,0.453-0.298c0.175,0.014,0.243,0.048,0.364,0.262c0.127,0.225,0.125,0.415,0.08,0.588c-0.018,0.066-0.042,0.123-0.078,0.17c0.112,0.06,0.19,0.148,0.18,0.289c-0.009,0.16-0.044,0.278-0.109,0.366c0.037,0.106,0.069,0.253,0.18,0.43c0.205,0.321,0.194,0.547,0.423,1.05c0.114,0.252,0.249,0.449,0.333,0.727c0.092,0.299,0.138,0.706,0.138,1.104c0,0.085-0.01,0.228-0.024,0.355c0.058,0.012,0.111,0.035,0.158,0.082c0.088,0.088,0.075,0.211,0.06,0.34l-0.005,0.041c-0.002,0.029-0.002,0.029,0.04,0.066l0.013,0.011c0.006,0.005,0.013,0.011,0.02,0.017c0.043,0.037,0.074,0.064,0.189,0.074c0.024,0.002,0.047,0.002,0.068,0.002c0.094,0,0.123-0.016,0.179-0.051c0.083-0.053,0.191-0.142,0.219-0.177c0.011-0.016,0.04-0.06,0.063-0.095c0.046-0.072,0.08-0.125,0.114-0.16c-0.011-0.01-0.022-0.025-0.035-0.045c-0.04-0.06-0.116-0.106-0.21-0.137c-0.094-0.031-0.229-0.046-0.285-0.049c-0.053-0.003-0.193-0.004-0.274,0.021c-0.081,0.028-0.122,0.089-0.161,0.098c-0.037,0.008,0.016-0.062,0.082-0.105c0.038-0.026,0.106-0.04,0.173-0.049c0.019-0.045,0.061-0.146,0.092-0.248c0.04-0.135,0.056-0.212,0.084-0.414c0.042-0.295-0.064-0.664-0.271-0.94c-0.23-0.308-0.452-0.359-0.439-0.38c0.018-0.03,0.263,0.122,0.336,0.199c0.247,0.26,0.361,0.517,0.407,0.827c0.051,0.352-0.087,0.77-0.144,0.9c-0.011,0.024-0.019,0.038-0.027,0.053c0.039-0.003,0.076-0.003,0.107-0.002c0.098,0.004,0.208,0.021,0.208,0.021s0.099,0.015,0.188,0.051c0.087,0.036,0.198,0.101,0.208,0.168c0.019-0.013,0.042-0.019,0.068-0.021c0.019-0.004,0.053-0.011,0.093-0.011c0.019,0,0.036,0.001,0.054,0.005c0.035-0.092,0.062-0.176,0.08-0.247c0.146-0.59-0.31-1.609-0.746-2.228c-0.436-0.617-0.794-1-0.97-1.781c-0.177-0.781,0.044-0.556-0.113-1.239c-0.076-0.341-0.212-0.61-0.363-0.788c-0.151-0.182-0.354-0.285-0.453-0.339c-0.232-0.124-0.818-0.34-1.517,0.023c-0.737,0.382-0.639,1.209-0.52,2.864c0.031,0.445-0.383,0.75-0.765,1.325C9.961,8.982,9.759,9.474,9.588,9.9C9.409,10.346,9.369,10.448,9.43,10.753L9.43,10.753z M13.672,7.065c0.061,0.059,0.129,0.04,0.18,0.098c0.051,0.058,0.119,0.143,0.035,0.233c-0.045,0.047-0.112,0.047-0.219-0.06c-0.109-0.111-0.14-0.279-0.123-0.298C13.57,7.01,13.613,7.005,13.672,7.065z M13.272,5.679c-0.019,0.006-0.078-0.113-0.109-0.149s-0.112-0.106-0.147-0.119c-0.034-0.013-0.118-0.028-0.118-0.044c-0.002-0.013,0.075-0.01,0.135,0.014c0.061,0.025,0.155,0.126,0.185,0.169C13.249,5.594,13.291,5.674,13.272,5.679z M12.883,4.631C12.902,4.6,12.98,4.6,13.016,4.602c0.035,0.004,0.119,0.101,0.13,0.18c0.008,0.054-0.196,0.153-0.254,0.128C12.832,4.887,12.859,4.658,12.883,4.631z M11.794,5.5c0.097,0.086,0.14,0.176,0.111,0.178c-0.03,0.003-0.039-0.069-0.134-0.151c-0.092-0.079-0.181-0.072-0.183-0.099C11.588,5.4,11.718,5.434,11.794,5.5z"></path><path d="M20,23H6c-0.551,0-1,1-1,1v1h16v-1C21,23.449,20.551,23,20,23z"></path><path d="M23,0H3C1.344,0,0,1.344,0,3v14c0,1.656,1.344,3,3,3h7v1c0,0.551,0.449,1,1,1h4c0.551,0,1-0.516,1-1c0-0.209,0-0.611,0-1h7c1.656,0,3-1.344,3-3V3C26,1.344,24.656,0,23,0z M23.275,18.725c-0.399,0-0.724-0.324-0.724-0.725s0.324-0.725,0.724-0.725C23.676,17.275,24,17.6,24,18C24,18.4,23.676,18.725,23.275,18.725z M24,15c0,0.551-0.449,1-1,1H3c-0.551,0-1-0.449-1-1V3c0-0.551,0.449-1,1-1h20c0.551,0,1,0.449,1,1V15z"></path></g></svg>', 
		    	
		    	"Windows" => '<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26 25" xml:space="preserve"><g><path d="M20,23H6c-0.551,0-1,1-1,1v1h16v-1C21,23.449,20.551,23,20,23z"></path><path d="M12.811,8.52l1.061-3.658c-0.933-0.631-1.967-1.136-4.119-0.244L8.691,8.291c0.855-0.354,1.53-0.515,2.096-0.51C11.646,7.787,12.25,8.142,12.811,8.52z"></path><path d="M14.431,5.246l-1.06,3.679c0.93,0.631,2.053,1.147,4.115,0.226l1.059-3.665C16.395,6.373,15.361,5.875,14.431,5.246z"></path><path d="M8.518,8.965L8.505,8.971l-1.05,3.652c2.155-0.892,3.17-0.374,4.104,0.254l1.074-3.692C11.702,8.554,10.664,8.082,8.518,8.965z"></path><path d="M13.195,9.541l-1.063,3.652c0.934,0.633,1.967,1.137,4.117,0.246l1.024-3.56C15.082,10.63,14.127,10.169,13.195,9.541z"></path><path d="M23,0H3C1.344,0,0,1.344,0,3v14c0,1.656,1.344,3,3,3h7v1c0,0.551,0.449,1,1,1h4c0.551,0,1-0.516,1-1c0-0.209,0-0.611,0-1h7c1.656,0,3-1.344,3-3V3C26,1.344,24.656,0,23,0zM23.275,18.725c-0.399,0-0.724-0.324-0.724-0.725s0.324-0.725,0.724-0.725C23.676,17.275,24,17.6,24,18C24,18.4,23.676,18.725,23.275,18.725z M24,15c0,0.551-0.449,1-1,1H3c-0.551,0-1-0.449-1-1V3c0-0.551,0.449-1,1-1h20c0.551,0,1,0.449,1,1V15z"></path></g></svg>'
		    	) 
	    );
		    
	    
        return $this->render('default/grid.html.twig', $defaults);
    }

}
