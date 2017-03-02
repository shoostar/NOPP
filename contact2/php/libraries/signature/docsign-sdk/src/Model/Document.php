<?php
/**
 * Document
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocuSign\eSign\Model;

use \ArrayAccess;
/**
 * Document Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Document implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'document_id' => 'string',
        'uri' => 'string',
        'remote_url' => 'string',
        'name' => 'string',
        'password' => 'string',
        'transform_pdf_fields' => 'string',
        'file_extension' => 'string',
        'match_boxes' => '\DocuSign\eSign\Model\MatchBox[]',
        'order' => 'string',
        'pages' => 'string',
        'document_fields' => '\DocuSign\eSign\Model\NameValue[]',
        'encrypted_with_key_manager' => 'string',
        'document_base64' => 'string',
        'apply_anchor_tabs' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'document_id' => 'documentId',
        'uri' => 'uri',
        'remote_url' => 'remoteUrl',
        'name' => 'name',
        'password' => 'password',
        'transform_pdf_fields' => 'transformPdfFields',
        'file_extension' => 'fileExtension',
        'match_boxes' => 'matchBoxes',
        'order' => 'order',
        'pages' => 'pages',
        'document_fields' => 'documentFields',
        'encrypted_with_key_manager' => 'encryptedWithKeyManager',
        'document_base64' => 'documentBase64',
        'apply_anchor_tabs' => 'applyAnchorTabs'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'document_id' => 'setDocumentId',
        'uri' => 'setUri',
        'remote_url' => 'setRemoteUrl',
        'name' => 'setName',
        'password' => 'setPassword',
        'transform_pdf_fields' => 'setTransformPdfFields',
        'file_extension' => 'setFileExtension',
        'match_boxes' => 'setMatchBoxes',
        'order' => 'setOrder',
        'pages' => 'setPages',
        'document_fields' => 'setDocumentFields',
        'encrypted_with_key_manager' => 'setEncryptedWithKeyManager',
        'document_base64' => 'setDocumentBase64',
        'apply_anchor_tabs' => 'setApplyAnchorTabs'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'document_id' => 'getDocumentId',
        'uri' => 'getUri',
        'remote_url' => 'getRemoteUrl',
        'name' => 'getName',
        'password' => 'getPassword',
        'transform_pdf_fields' => 'getTransformPdfFields',
        'file_extension' => 'getFileExtension',
        'match_boxes' => 'getMatchBoxes',
        'order' => 'getOrder',
        'pages' => 'getPages',
        'document_fields' => 'getDocumentFields',
        'encrypted_with_key_manager' => 'getEncryptedWithKeyManager',
        'document_base64' => 'getDocumentBase64',
        'apply_anchor_tabs' => 'getApplyAnchorTabs'
    );
  
    
    /**
      * $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
      * @var string
      */
    protected $document_id;
    
    /**
      * $uri 
      * @var string
      */
    protected $uri;
    
    /**
      * $remote_url The file id from the cloud storage service where the document is located. This information is returned using [ML:GET /folders] or [ML:/folders/{folderid}].
      * @var string
      */
    protected $remote_url;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $password 
      * @var string
      */
    protected $password;
    
    /**
      * $transform_pdf_fields When set to **true**, PDF form field data is transformed into document tab values when the PDF form field name matches the DocuSign custom tab tabLabel. The resulting PDF form data is also returned in the PDF meta data when requesting the document PDF. See the [ML:Transform PDF Fields] section for more information about how fields are transformed into DocuSign tabs.
      * @var string
      */
    protected $transform_pdf_fields;
    
    /**
      * $file_extension The file extension type of the document. If the document is not a PDF it is converted to a PDF.
      * @var string
      */
    protected $file_extension;
    
    /**
      * $match_boxes Matchboxes define areas in a document for document matching when you are creating envelopes. They are only used when you upload and edit a template. \n\nA matchbox consists of 5 elements:\n\n* pageNumber - The document page number  on which the matchbox will appear. \n* xPosition - The x position of the matchbox on a page. \n* yPosition - The y position of the matchbox on a page.\n* width - The width of the matchbox. \n* height - The height of the matchbox.
      * @var \DocuSign\eSign\Model\MatchBox[]
      */
    protected $match_boxes;
    
    /**
      * $order 
      * @var string
      */
    protected $order;
    
    /**
      * $pages 
      * @var string
      */
    protected $pages;
    
    /**
      * $document_fields 
      * @var \DocuSign\eSign\Model\NameValue[]
      */
    protected $document_fields;
    
    /**
      * $encrypted_with_key_manager When set to **true**, the document is been already encrypted by the sender for use with the DocuSign Key Manager Security Appliance.
      * @var string
      */
    protected $encrypted_with_key_manager;
    
    /**
      * $document_base64 The document byte stream. This allows putting a base64 version of document bytes into an envelope.
      * @var string
      */
    protected $document_base64;
    
    /**
      * $apply_anchor_tabs Reserved: TBD
      * @var string
      */
    protected $apply_anchor_tabs;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->document_id = $data["document_id"];
            $this->uri = $data["uri"];
            $this->remote_url = $data["remote_url"];
            $this->name = $data["name"];
            $this->password = $data["password"];
            $this->transform_pdf_fields = $data["transform_pdf_fields"];
            $this->file_extension = $data["file_extension"];
            $this->match_boxes = $data["match_boxes"];
            $this->order = $data["order"];
            $this->pages = $data["pages"];
            $this->document_fields = $data["document_fields"];
            $this->encrypted_with_key_manager = $data["encrypted_with_key_manager"];
            $this->document_base64 = $data["document_base64"];
            $this->apply_anchor_tabs = $data["apply_anchor_tabs"];
        }
    }
    
    /**
     * Gets document_id
     * @return string
     */
    public function getDocumentId()
    {
        return $this->document_id;
    }
  
    /**
     * Sets document_id
     * @param string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        
        $this->document_id = $document_id;
        return $this;
    }
    
    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }
  
    /**
     * Sets uri
     * @param string $uri 
     * @return $this
     */
    public function setUri($uri)
    {
        
        $this->uri = $uri;
        return $this;
    }
    
    /**
     * Gets remote_url
     * @return string
     */
    public function getRemoteUrl()
    {
        return $this->remote_url;
    }
  
    /**
     * Sets remote_url
     * @param string $remote_url The file id from the cloud storage service where the document is located. This information is returned using [ML:GET /folders] or [ML:/folders/{folderid}].
     * @return $this
     */
    public function setRemoteUrl($remote_url)
    {
        
        $this->remote_url = $remote_url;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets password
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
  
    /**
     * Sets password
     * @param string $password 
     * @return $this
     */
    public function setPassword($password)
    {
        
        $this->password = $password;
        return $this;
    }
    
    /**
     * Gets transform_pdf_fields
     * @return string
     */
    public function getTransformPdfFields()
    {
        return $this->transform_pdf_fields;
    }
  
    /**
     * Sets transform_pdf_fields
     * @param string $transform_pdf_fields When set to **true**, PDF form field data is transformed into document tab values when the PDF form field name matches the DocuSign custom tab tabLabel. The resulting PDF form data is also returned in the PDF meta data when requesting the document PDF. See the [ML:Transform PDF Fields] section for more information about how fields are transformed into DocuSign tabs.
     * @return $this
     */
    public function setTransformPdfFields($transform_pdf_fields)
    {
        
        $this->transform_pdf_fields = $transform_pdf_fields;
        return $this;
    }
    
    /**
     * Gets file_extension
     * @return string
     */
    public function getFileExtension()
    {
        return $this->file_extension;
    }
  
    /**
     * Sets file_extension
     * @param string $file_extension The file extension type of the document. If the document is not a PDF it is converted to a PDF.
     * @return $this
     */
    public function setFileExtension($file_extension)
    {
        
        $this->file_extension = $file_extension;
        return $this;
    }
    
    /**
     * Gets match_boxes
     * @return \DocuSign\eSign\Model\MatchBox[]
     */
    public function getMatchBoxes()
    {
        return $this->match_boxes;
    }
  
    /**
     * Sets match_boxes
     * @param \DocuSign\eSign\Model\MatchBox[] $match_boxes Matchboxes define areas in a document for document matching when you are creating envelopes. They are only used when you upload and edit a template. \n\nA matchbox consists of 5 elements:\n\n* pageNumber - The document page number  on which the matchbox will appear. \n* xPosition - The x position of the matchbox on a page. \n* yPosition - The y position of the matchbox on a page.\n* width - The width of the matchbox. \n* height - The height of the matchbox.
     * @return $this
     */
    public function setMatchBoxes($match_boxes)
    {
        
        $this->match_boxes = $match_boxes;
        return $this;
    }
    
    /**
     * Gets order
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param string $order 
     * @return $this
     */
    public function setOrder($order)
    {
        
        $this->order = $order;
        return $this;
    }
    
    /**
     * Gets pages
     * @return string
     */
    public function getPages()
    {
        return $this->pages;
    }
  
    /**
     * Sets pages
     * @param string $pages 
     * @return $this
     */
    public function setPages($pages)
    {
        
        $this->pages = $pages;
        return $this;
    }
    
    /**
     * Gets document_fields
     * @return \DocuSign\eSign\Model\NameValue[]
     */
    public function getDocumentFields()
    {
        return $this->document_fields;
    }
  
    /**
     * Sets document_fields
     * @param \DocuSign\eSign\Model\NameValue[] $document_fields 
     * @return $this
     */
    public function setDocumentFields($document_fields)
    {
        
        $this->document_fields = $document_fields;
        return $this;
    }
    
    /**
     * Gets encrypted_with_key_manager
     * @return string
     */
    public function getEncryptedWithKeyManager()
    {
        return $this->encrypted_with_key_manager;
    }
  
    /**
     * Sets encrypted_with_key_manager
     * @param string $encrypted_with_key_manager When set to **true**, the document is been already encrypted by the sender for use with the DocuSign Key Manager Security Appliance.
     * @return $this
     */
    public function setEncryptedWithKeyManager($encrypted_with_key_manager)
    {
        
        $this->encrypted_with_key_manager = $encrypted_with_key_manager;
        return $this;
    }
    
    /**
     * Gets document_base64
     * @return string
     */
    public function getDocumentBase64()
    {
        return $this->document_base64;
    }
  
    /**
     * Sets document_base64
     * @param string $document_base64 The document byte stream. This allows putting a base64 version of document bytes into an envelope.
     * @return $this
     */
    public function setDocumentBase64($document_base64)
    {
        
        $this->document_base64 = $document_base64;
        return $this;
    }
    
    /**
     * Gets apply_anchor_tabs
     * @return string
     */
    public function getApplyAnchorTabs()
    {
        return $this->apply_anchor_tabs;
    }
  
    /**
     * Sets apply_anchor_tabs
     * @param string $apply_anchor_tabs Reserved: TBD
     * @return $this
     */
    public function setApplyAnchorTabs($apply_anchor_tabs)
    {
        
        $this->apply_anchor_tabs = $apply_anchor_tabs;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
