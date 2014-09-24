<?php

/**
 * Class Api_Request_RelateRecordApi_createRelatedLink
 * POST rest/v10/<module>/<record>/link/<link_name>/<remote_id>
 */
class Api_Request_RelateRecordApi_createRelatedLink extends Api_Request_Abstract
{
    protected $base_resources = array('?', '?', 'link', '?', '?');

    protected $request_type = Api_Request_Abstract::TYPE_POST;

    public function setParser(Api_Response_Parser_Abstract $parser = null)
    {
        if (empty($parser)) {
            $this->parser = new Api_Response_Parser_RelateRecordApi_createRelatedLink();
        } else {
            $this->parser = $parser;
        }
    }

}
