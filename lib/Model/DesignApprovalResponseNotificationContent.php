<?php
/**
 * DesignApprovalResponseNotificationContent
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Canva Connect API
 *
 * API for building integrations with Canva via a REST api
 *
 * The version of the OpenAPI document: latest
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DesignApprovalResponseNotificationContent Class Doc Comment
 *
 * @category Class
 * @description The notification content for when someone approves a design or gives feeback.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DesignApprovalResponseNotificationContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DesignApprovalResponseNotificationContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'triggering_user' => '\OpenAPI\Client\Model\User',
        'receiving_team_user' => '\OpenAPI\Client\Model\TeamUser',
        'requesting_user' => '\OpenAPI\Client\Model\User',
        'responding_groups' => '\OpenAPI\Client\Model\Group[]',
        'design' => '\OpenAPI\Client\Model\DesignSummary',
        'approval_response' => '\OpenAPI\Client\Model\ApprovalResponseAction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'triggering_user' => null,
        'receiving_team_user' => null,
        'requesting_user' => null,
        'responding_groups' => null,
        'design' => null,
        'approval_response' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'triggering_user' => false,
        'receiving_team_user' => false,
        'requesting_user' => false,
        'responding_groups' => false,
        'design' => false,
        'approval_response' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'triggering_user' => 'triggering_user',
        'receiving_team_user' => 'receiving_team_user',
        'requesting_user' => 'requesting_user',
        'responding_groups' => 'responding_groups',
        'design' => 'design',
        'approval_response' => 'approval_response'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'triggering_user' => 'setTriggeringUser',
        'receiving_team_user' => 'setReceivingTeamUser',
        'requesting_user' => 'setRequestingUser',
        'responding_groups' => 'setRespondingGroups',
        'design' => 'setDesign',
        'approval_response' => 'setApprovalResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'triggering_user' => 'getTriggeringUser',
        'receiving_team_user' => 'getReceivingTeamUser',
        'requesting_user' => 'getRequestingUser',
        'responding_groups' => 'getRespondingGroups',
        'design' => 'getDesign',
        'approval_response' => 'getApprovalResponse'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const TYPE_DESIGN_APPROVAL_RESPONSE = 'design_approval_response';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DESIGN_APPROVAL_RESPONSE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('triggering_user', $data ?? [], null);
        $this->setIfExists('receiving_team_user', $data ?? [], null);
        $this->setIfExists('requesting_user', $data ?? [], null);
        $this->setIfExists('responding_groups', $data ?? [], null);
        $this->setIfExists('design', $data ?? [], null);
        $this->setIfExists('approval_response', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['triggering_user'] === null) {
            $invalidProperties[] = "'triggering_user' can't be null";
        }
        if ($this->container['receiving_team_user'] === null) {
            $invalidProperties[] = "'receiving_team_user' can't be null";
        }
        if ($this->container['responding_groups'] === null) {
            $invalidProperties[] = "'responding_groups' can't be null";
        }
        if ($this->container['design'] === null) {
            $invalidProperties[] = "'design' can't be null";
        }
        if ($this->container['approval_response'] === null) {
            $invalidProperties[] = "'approval_response' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets triggering_user
     *
     * @return \OpenAPI\Client\Model\User
     */
    public function getTriggeringUser()
    {
        return $this->container['triggering_user'];
    }

    /**
     * Sets triggering_user
     *
     * @param \OpenAPI\Client\Model\User $triggering_user triggering_user
     *
     * @return self
     */
    public function setTriggeringUser($triggering_user)
    {
        if (is_null($triggering_user)) {
            throw new \InvalidArgumentException('non-nullable triggering_user cannot be null');
        }
        $this->container['triggering_user'] = $triggering_user;

        return $this;
    }

    /**
     * Gets receiving_team_user
     *
     * @return \OpenAPI\Client\Model\TeamUser
     */
    public function getReceivingTeamUser()
    {
        return $this->container['receiving_team_user'];
    }

    /**
     * Sets receiving_team_user
     *
     * @param \OpenAPI\Client\Model\TeamUser $receiving_team_user receiving_team_user
     *
     * @return self
     */
    public function setReceivingTeamUser($receiving_team_user)
    {
        if (is_null($receiving_team_user)) {
            throw new \InvalidArgumentException('non-nullable receiving_team_user cannot be null');
        }
        $this->container['receiving_team_user'] = $receiving_team_user;

        return $this;
    }

    /**
     * Gets requesting_user
     *
     * @return \OpenAPI\Client\Model\User|null
     */
    public function getRequestingUser()
    {
        return $this->container['requesting_user'];
    }

    /**
     * Sets requesting_user
     *
     * @param \OpenAPI\Client\Model\User|null $requesting_user requesting_user
     *
     * @return self
     */
    public function setRequestingUser($requesting_user)
    {
        if (is_null($requesting_user)) {
            throw new \InvalidArgumentException('non-nullable requesting_user cannot be null');
        }
        $this->container['requesting_user'] = $requesting_user;

        return $this;
    }

    /**
     * Gets responding_groups
     *
     * @return \OpenAPI\Client\Model\Group[]
     */
    public function getRespondingGroups()
    {
        return $this->container['responding_groups'];
    }

    /**
     * Sets responding_groups
     *
     * @param \OpenAPI\Client\Model\Group[] $responding_groups responding_groups
     *
     * @return self
     */
    public function setRespondingGroups($responding_groups)
    {
        if (is_null($responding_groups)) {
            throw new \InvalidArgumentException('non-nullable responding_groups cannot be null');
        }
        $this->container['responding_groups'] = $responding_groups;

        return $this;
    }

    /**
     * Gets design
     *
     * @return \OpenAPI\Client\Model\DesignSummary
     */
    public function getDesign()
    {
        return $this->container['design'];
    }

    /**
     * Sets design
     *
     * @param \OpenAPI\Client\Model\DesignSummary $design design
     *
     * @return self
     */
    public function setDesign($design)
    {
        if (is_null($design)) {
            throw new \InvalidArgumentException('non-nullable design cannot be null');
        }
        $this->container['design'] = $design;

        return $this;
    }

    /**
     * Gets approval_response
     *
     * @return \OpenAPI\Client\Model\ApprovalResponseAction
     */
    public function getApprovalResponse()
    {
        return $this->container['approval_response'];
    }

    /**
     * Sets approval_response
     *
     * @param \OpenAPI\Client\Model\ApprovalResponseAction $approval_response approval_response
     *
     * @return self
     */
    public function setApprovalResponse($approval_response)
    {
        if (is_null($approval_response)) {
            throw new \InvalidArgumentException('non-nullable approval_response cannot be null');
        }
        $this->container['approval_response'] = $approval_response;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

