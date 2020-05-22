<?php
namespace FulfilioNet\eBaySDK;

/**
 * Builds FulfilioNet\eBaySDK services based on passed configuration options.
 *
 * @method \FulfilioNet\eBaySDK\Account\Services\AccountService createAccount(array $args = [])
 * @method \FulfilioNet\eBaySDK\Analytics\Services\AnalyticsService createAnalytics(array $args = [])
 * @method \FulfilioNet\eBaySDK\Browse\Services\BrowseService createBrowse(array $args = [])
 * @method \FulfilioNet\eBaySDK\BulkDataExchange\Services\BulkDataExchangeService createBulkDataExchange(array $args = [])
 * @method \FulfilioNet\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementService createBusinessPoliciesManagement(array $args = [])
 * @method \FulfilioNet\eBaySDK\Feedback\Services\FeedbackService createFeedback(array $args = [])
 * @method \FulfilioNet\eBaySDK\FileTransfer\Services\FileTransferService createFileTransfer(array $args = [])
 * @method \FulfilioNet\eBaySDK\Finding\Services\FindingService createFinding(array $args = [])
 * @method \FulfilioNet\eBaySDK\Fulfillment\Services\FulfillmentService createFulfillment(array $args = [])
 * @method \FulfilioNet\eBaySDK\HalfFinding\Services\HalfFindingService createHalfFinding(array $args = [])
 * @method \FulfilioNet\eBaySDK\Inventory\Services\InventoryService createInventory(array $args = [])
 * @method \FulfilioNet\eBaySDK\Marketing\Services\MarketingService createMarketing(array $args = [])
 * @method \FulfilioNet\eBaySDK\Merchandising\Services\MerchandisingService createMerchandising(array $args = [])
 * @method \FulfilioNet\eBaySDK\Metadata\Services\MetadataService createMetadata(array $args = [])
 * @method \FulfilioNet\eBaySDK\Order\Services\OrderService createOrder(array $args = [])
 * @method \FulfilioNet\eBaySDK\PostOrder\Services\PostOrderService createPostOrder(array $args = [])
 * @method \FulfilioNet\eBaySDK\Product\Services\ProductService createProduct(array $args = [])
 * @method \FulfilioNet\eBaySDK\ProductMetadata\Services\ProductMetadataService createProductMetadata(array $args = [])
 * @method \FulfilioNet\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementService createRelatedItemsManagement(array $args = [])
 * @method \FulfilioNet\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService createResolutionCaseManagement(array $args = [])
 * @method \FulfilioNet\eBaySDK\ReturnManagement\Services\ReturnManagementService createReturnManagement(array $args = [])
 * @method \FulfilioNet\eBaySDK\Shopping\Services\ShoppingService createShopping(array $args = [])
 * @method \FulfilioNet\eBaySDK\Trading\Services\TradingService createTrading(array $args = [])
 */
class Sdk
{
    const VERSION = '18.0.0';

    /**
     * @var bool Controls if the SDK should enforce strict types
     * when values are assigned to property classes.
     */
    public static $STRICT_PROPERTY_TYPES = true;

    /**
     * @var array Configuration options for all services.
     */
    private $config;

    /**
     * @param array $config Configuration option values for all services.
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @param string $name The method name.
     * @param array $args Arguments that will be passed to the method.
     *
     * @return \FulfilioNet\eBaySDK\Services\BaseService
     * @throws \BadMethodCallException
     */
    public function __call($name, array $args)
    {
        if (strpos($name, 'create') === 0) {
            return $this->createService(
                substr($name, 6),
                isset($args[0]) ? $args[0] : []
            );
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Create a service object by namespace. Service is configured using array of options.
     *
     * @param string $namespace Service namespace (e.g. Finding, Trading).
     * @param array  $config Configuration options for the service.
     *
     * @return \FulfilioNet\eBaySDK\Services\BaseService
     **/
    public function createService($namespace, array $config = [])
    {
        $configuration = $this->config;

        if (isset($this->config[$namespace])) {
            $configuration = arrayMergeDeep($configuration, $this->config[$namespace]);
        }

        $configuration = arrayMergeDeep($configuration, $config);

        $service = "FulfilioNet\\eBaySDK\\{$namespace}\\Services\\{$namespace}Service";

        return new $service($configuration);
    }
}
