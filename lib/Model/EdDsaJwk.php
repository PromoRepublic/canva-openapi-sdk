<?php
/**
 * EdDsaJwk
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Integrations\Canva\SDK
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

namespace Integrations\Canva\SDK\Model;

use \ArrayAccess;
use \Integrations\Canva\SDK\ObjectSerializer;

/**
 * EdDsaJwk Class Doc Comment
 *
 * @category Class
 * @description A JSON Web Key Set (JWKS) using the Edwards-curve Digital Signature Algorithm (EdDSA), as described in [RFC-8037](https://www.rfc-editor.org/rfc/rfc8037.html#appendix-A).
 * @package  Integrations\Canva\SDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EdDsaJwk implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EdDsaJwk';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'kid' => 'string',
        'kty' => 'string',
        'crv' => 'string',
        'x' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'kid' => null,
        'kty' => null,
        'crv' => null,
        'x' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'kid' => false,
        'kty' => false,
        'crv' => false,
        'x' => false
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
        'kid' => 'kid',
        'kty' => 'kty',
        'crv' => 'crv',
        'x' => 'x'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'kid' => 'setKid',
        'kty' => 'setKty',
        'crv' => 'setCrv',
        'x' => 'setX'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'kid' => 'getKid',
        'kty' => 'getKty',
        'crv' => 'getCrv',
        'x' => 'getX'
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
        $this->setIfExists('kid', $data ?? [], null);
        $this->setIfExists('kty', $data ?? [], null);
        $this->setIfExists('crv', $data ?? [], null);
        $this->setIfExists('x', $data ?? [], null);
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

        if ($this->container['kid'] === null) {
            $invalidProperties[] = "'kid' can't be null";
        }
        if ($this->container['kty'] === null) {
            $invalidProperties[] = "'kty' can't be null";
        }
        if ($this->container['crv'] === null) {
            $invalidProperties[] = "'crv' can't be null";
        }
        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
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
     * Gets kid
     *
     * @return string
     */
    public function getKid()
    {
        return $this->container['kid'];
    }

    /**
     * Sets kid
     *
     * @param string $kid The `kid` (key ID) is a unique identifier for a public key. When the keys used to sign webhooks are rotated, you can use this ID to select the correct key within a JWK Set during the key rollover. The `kid` value is case-sensitive.
     *
     * @return self
     */
    public function setKid($kid)
    {
        if (is_null($kid)) {
            throw new \InvalidArgumentException('non-nullable kid cannot be null');
        }
        $this->container['kid'] = $kid;

        return $this;
    }

    /**
     * Gets kty
     *
     * @return string
     */
    public function getKty()
    {
        return $this->container['kty'];
    }

    /**
     * Sets kty
     *
     * @param string $kty The `kty` (key type) identifies the cryptographic algorithm family used with the key, such as \"RSA\" or \"EC\". Only Octet Key Pairs (`OKPs`) are supported. The `kty` value is case-sensitive. For more information on the `kty` property and OKPs, see [RFC-8037 — \"kty\" (Key Type) Parameter](https://www.rfc-editor.org/rfc/rfc8037.html#section-2).
     *
     * @return self
     */
    public function setKty($kty)
    {
        if (is_null($kty)) {
            throw new \InvalidArgumentException('non-nullable kty cannot be null');
        }
        $this->container['kty'] = $kty;

        return $this;
    }

    /**
     * Gets crv
     *
     * @return string
     */
    public function getCrv()
    {
        return $this->container['crv'];
    }

    /**
     * Sets crv
     *
     * @param string $crv The `crv` (curve) property identifies the curve used for elliptical curve encryptions. Only \"Ed25519\" is supported. For more information on the `crv` property, see [RFC-8037 — Key Type \"OKP\"](https://www.rfc-editor.org/rfc/rfc8037.html#section-2).
     *
     * @return self
     */
    public function setCrv($crv)
    {
        if (is_null($crv)) {
            throw new \InvalidArgumentException('non-nullable crv cannot be null');
        }
        $this->container['crv'] = $crv;

        return $this;
    }

    /**
     * Gets x
     *
     * @return string
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param string $x The `x` property is the public key of an elliptical curve encryption. The key is Base64urlUInt-encoded. For more information on the `x` property, see [RFC-8037 — \"x\" (X Coordinate) Parameter](https://www.rfc-editor.org/rfc/rfc8037#section-2).
     *
     * @return self
     */
    public function setX($x)
    {
        if (is_null($x)) {
            throw new \InvalidArgumentException('non-nullable x cannot be null');
        }
        $this->container['x'] = $x;

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


