<?php

class Supplier extends SupplierCore {};
class Store extends StoreCore {};
class CacheMemcache extends CacheMemcacheCore {};
class CacheMemcached extends CacheMemcachedCore {};
class CacheApc extends CacheApcCore {};
abstract class Cache extends CacheCore {};
class CacheXcache extends CacheXcacheCore {};
class Access extends AccessCore {};
class PrestaShopBackup extends PrestaShopBackupCore {};
class SpecificPrice extends SpecificPriceCore {};
class Translate extends TranslateCore {};
class CustomerMessage extends CustomerMessageCore {};
class Media extends MediaCore {};
class Customer extends CustomerCore {};
class Category extends CategoryCore {};
class Notification extends NotificationCore {};
class Contact extends ContactCore {};
class PrestaShopCollection extends PrestaShopCollectionCore {};
class PrestaShopException extends PrestaShopExceptionCore {};
class PrestaShopDatabaseException extends PrestaShopDatabaseExceptionCore {};
class PrestaShopObjectNotFoundException extends PrestaShopObjectNotFoundExceptionCore {};
class PrestaShopPaymentException extends PrestaShopPaymentExceptionCore {};
class PrestaShopModuleException extends PrestaShopModuleExceptionCore {};
class Carrier extends CarrierCore {};
class Uploader extends UploaderCore {};
class Tag extends TagCore {};
class CustomerThread extends CustomerThreadCore {};
abstract class AbstractAssetManager extends AbstractAssetManagerCore {};
class JavascriptManager extends JavascriptManagerCore {};
class CccReducer extends CccReducerCore {};
class StylesheetManager extends StylesheetManagerCore {};
class CssMinifier extends CssMinifierCore {};
class JsMinifier extends JsMinifierCore {};
class Meta extends MetaCore {};
class DbMySQLi extends DbMySQLiCore {};
abstract class Db extends DbCore {};
class DbPDO extends DbPDOCore {};
class DbQuery extends DbQueryCore {};
class Tools extends ToolsCore {};
class Attachment extends AttachmentCore {};
class Image extends ImageCore {};
class HelperView extends HelperViewCore {};
class HelperShop extends HelperShopCore {};
class HelperForm extends HelperFormCore {};
class HelperKpi extends HelperKpiCore {};
class HelperCalendar extends HelperCalendarCore {};
class HelperTreeShops extends HelperTreeShopsCore {};
class HelperImageUploader extends HelperImageUploaderCore {};
class Helper extends HelperCore {};
class HelperKpiRow extends HelperKpiRowCore {};
class HelperOptions extends HelperOptionsCore {};
class HelperTreeCategories extends HelperTreeCategoriesCore {};
class HelperList extends HelperListCore {};
class HelperUploader extends HelperUploaderCore {};
class Mail extends MailCore {};
abstract class PaymentModule extends PaymentModuleCore {};
class CustomizationField extends CustomizationFieldCore {};
class CartRule extends CartRuleCore {};
class ValidateConstraintTranslator extends ValidateConstraintTranslatorCore {};
class FileUploader extends FileUploaderCore {};
class ConnectionsSource extends ConnectionsSourceCore {};
class ProductAssembler extends ProductAssemblerCore {};
class ProductSupplier extends ProductSupplierCore {};
class OrderMessage extends OrderMessageCore {};
class OrderCartRule extends OrderCartRuleCore {};
class Order extends OrderCore {};
class OrderReturn extends OrderReturnCore {};
class OrderSlip extends OrderSlipCore {};
class OrderReturnState extends OrderReturnStateCore {};
class OrderDetail extends OrderDetailCore {};
class OrderInvoice extends OrderInvoiceCore {};
class OrderPayment extends OrderPaymentCore {};
class OrderCarrier extends OrderCarrierCore {};
class OrderHistory extends OrderHistoryCore {};
class OrderState extends OrderStateCore {};
class Curve extends CurveCore {};
class Currency extends CurrencyCore {};
class Risk extends RiskCore {};
class RequestSql extends RequestSqlCore {};
class SearchEngine extends SearchEngineCore {};
class TranslatedConfiguration extends TranslatedConfigurationCore {};
class Delivery extends DeliveryCore {};
class Pack extends PackCore {};
class PhpEncryption extends PhpEncryptionCore {};
class CSV extends CSVCore {};
class CMS extends CMSCore {};
class Country extends CountryCore {};
class ManufacturerAddress extends ManufacturerAddressCore {};
class CustomerSession extends CustomerSessionCore {};
class ProductDownload extends ProductDownloadCore {};
class AddressFormat extends AddressFormatCore {};
class ShopGroup extends ShopGroupCore {};
class ShopUrl extends ShopUrlCore {};
class Shop extends ShopCore {};
class Profile extends ProfileCore {};
class Cookie extends CookieCore {};
class Upgrader extends UpgraderCore {};
class QqUploadedFileXhr extends QqUploadedFileXhrCore {};
class RangeWeight extends RangeWeightCore {};
class RangePrice extends RangePriceCore {};
abstract class ProductPresentingFrontController extends ProductPresentingFrontControllerCore {};
abstract class Controller extends ControllerCore {};
class AdminController extends AdminControllerCore {};
abstract class ProductListingFrontController extends ProductListingFrontControllerCore {};
class FrontController extends FrontControllerCore {};
abstract class ModuleAdminController extends ModuleAdminControllerCore {};
class ModuleFrontController extends ModuleFrontControllerCore {};
class Search extends SearchCore {};
class Alias extends AliasCore {};
class ConfigurationTest extends ConfigurationTestCore {};
class AttributeGroup extends AttributeGroupCore {};
class PrestaShopLogger extends PrestaShopLoggerCore {};
class AttributeGroupLang extends AttributeGroupLangCore {};
class OrderStateLang extends OrderStateLangCore {};
class GroupLang extends GroupLangCore {};
class AttributeLang extends AttributeLangCore {};
class CmsCategoryLang extends CmsCategoryLangCore {};
class OrderMessageLang extends OrderMessageLangCore {};
class FeatureLang extends FeatureLangCore {};
class CategoryLang extends CategoryLangCore {};
class DataLang extends DataLangCore {};
class RiskLang extends RiskLangCore {};
class CarrierLang extends CarrierLangCore {};
class SupplyOrderStateLang extends SupplyOrderStateLangCore {};
class StockMvtReasonLang extends StockMvtReasonLangCore {};
class MetaLang extends MetaLangCore {};
class GenderLang extends GenderLangCore {};
class ConfigurationLang extends ConfigurationLangCore {};
class QuickAccessLang extends QuickAccessLangCore {};
class ThemeLang extends ThemeLangCore {};
class ProfileLang extends ProfileLangCore {};
class TabLang extends TabLangCore {};
class OrderReturnStateLang extends OrderReturnStateLangCore {};
class ContactLang extends ContactLangCore {};
class FeatureValueLang extends FeatureValueLangCore {};
class DateRange extends DateRangeCore {};
class Language extends LanguageCore {};
class Guest extends GuestCore {};
class FeatureValue extends FeatureValueCore {};
class Context extends ContextCore {};
class ImageType extends ImageTypeCore {};
class ProductAttribute extends ProductAttributeCore {};
class CMSCategory extends CMSCategoryCore {};
class ConfigurationKPI extends ConfigurationKPICore {};
class StockManagerFactory extends StockManagerFactoryCore {};
class SupplyOrderReceiptHistory extends SupplyOrderReceiptHistoryCore {};
class StockManager extends StockManagerCore {};
class SupplyOrderDetail extends SupplyOrderDetailCore {};
class StockMvt extends StockMvtCore {};
class StockMvtReason extends StockMvtReasonCore {};
abstract class StockManagerModule extends StockManagerModuleCore {};
class StockMvtWS extends StockMvtWSCore {};
class Stock extends StockCore {};
class WarehouseProductLocation extends WarehouseProductLocationCore {};
class SupplyOrder extends SupplyOrderCore {};
class Warehouse extends WarehouseCore {};
class SupplyOrderState extends SupplyOrderStateCore {};
class StockAvailable extends StockAvailableCore {};
class SupplyOrderHistory extends SupplyOrderHistoryCore {};
abstract class ObjectModel extends ObjectModelCore {};
class Feature extends FeatureCore {};
class Customization extends CustomizationCore {};
class Gender extends GenderCore {};
class State extends StateCore {};
class Cart extends CartCore {};
class Message extends MessageCore {};
class PhpEncryptionEngine extends PhpEncryptionEngineCore {};
class Employee extends EmployeeCore {};
class SpecificPriceRule extends SpecificPriceRuleCore {};
class Address extends AddressCore {};
class SmartyDevTemplate extends SmartyDevTemplateCore {};
class SmartyCustom extends SmartyCustomCore {};
class SmartyResourceModule extends SmartyResourceModuleCore {};
class TemplateFinder extends TemplateFinderCore {};
class SmartyCustomTemplate extends SmartyCustomTemplateCore {};
class SmartyResourceParent extends SmartyResourceParentCore {};
class Link extends LinkCore {};
class Hook extends HookCore {};
class Tab extends TabCore {};
class SpecificPriceFormatter extends SpecificPriceFormatterCore {};
class Manufacturer extends ManufacturerCore {};
class Chart extends ChartCore {};
class LinkProxy extends LinkProxyCore {};
class WarehouseAddress extends WarehouseAddressCore {};
class Product extends ProductCore {};
class EmployeeSession extends EmployeeSessionCore {};
class TreeToolbar extends TreeToolbarCore {};
class TreeToolbarLink extends TreeToolbarLinkCore {};
class TreeToolbarSearchCategories extends TreeToolbarSearchCategoriesCore {};
class TreeToolbarSearch extends TreeToolbarSearchCore {};
abstract class TreeToolbarButton extends TreeToolbarButtonCore {};
class Tree extends TreeCore {};
class ProductSale extends ProductSaleCore {};
class LocalizationPack extends LocalizationPackCore {};
class AddressValidator extends AddressValidatorCore {};
class DeliveryOptionsFinder extends DeliveryOptionsFinderCore {};
class CheckoutSession extends CheckoutSessionCore {};
class CheckoutDeliveryStep extends CheckoutDeliveryStepCore {};
class ConditionsToApproveFinder extends ConditionsToApproveFinderCore {};
abstract class AbstractCheckoutStep extends AbstractCheckoutStepCore {};
class CheckoutPaymentStep extends CheckoutPaymentStepCore {};
class CheckoutProcess extends CheckoutProcessCore {};
class CartChecksum extends CartChecksumCore {};
class CheckoutAddressesStep extends CheckoutAddressesStepCore {};
class PaymentOptionsFinder extends PaymentOptionsFinderCore {};
class CheckoutPersonalInformationStep extends CheckoutPersonalInformationStepCore {};
class FeatureFlag extends FeatureFlagCore {};
class Combination extends CombinationCore {};
class CMSRole extends CMSRoleCore {};
class Configuration extends ConfigurationCore {};
class QuickAccess extends QuickAccessCore {};
class ImageManager extends ImageManagerCore {};
abstract class HTMLTemplate extends HTMLTemplateCore {};
class HTMLTemplateOrderReturn extends HTMLTemplateOrderReturnCore {};
class HTMLTemplateInvoice extends HTMLTemplateInvoiceCore {};
class PDF extends PDFCore {};
class HTMLTemplateOrderSlip extends HTMLTemplateOrderSlipCore {};
class HTMLTemplateDeliverySlip extends HTMLTemplateDeliverySlipCore {};
class HTMLTemplateSupplyOrderForm extends HTMLTemplateSupplyOrderFormCore {};
class PDFGenerator extends PDFGeneratorCore {};
class CustomerAddress extends CustomerAddressCore {};
class Group extends GroupCore {};
abstract class AbstractLogger extends AbstractLoggerCore {};
class FileLogger extends FileLoggerCore {};
class ProductPresenterFactory extends ProductPresenterFactoryCore {};
class Page extends PageCore {};
class Dispatcher extends DispatcherCore {};
class Zone extends ZoneCore {};
class GroupReduction extends GroupReductionCore {};
class WebserviceOutputXML extends WebserviceOutputXMLCore {};
class WebserviceRequest extends WebserviceRequestCore {};
class WebserviceSpecificManagementSearch extends WebserviceSpecificManagementSearchCore {};
class WebserviceKey extends WebserviceKeyCore {};
class WebserviceSpecificManagementImages extends WebserviceSpecificManagementImagesCore {};
class WebserviceSpecificManagementAttachments extends WebserviceSpecificManagementAttachmentsCore {};
class WebserviceOutputJSON extends WebserviceOutputJSONCore {};
class WebserviceException extends WebserviceExceptionCore {};
class WebserviceOutputBuilder extends WebserviceOutputBuilderCore {};
class Validate extends ValidateCore {};
class CustomerLoginFormatter extends CustomerLoginFormatterCore {};
class CustomerPersister extends CustomerPersisterCore {};
class CustomerAddressForm extends CustomerAddressFormCore {};
class CustomerFormatter extends CustomerFormatterCore {};
class FormField extends FormFieldCore {};
class CustomerLoginForm extends CustomerLoginFormCore {};
class CustomerAddressPersister extends CustomerAddressPersisterCore {};
class CustomerAddressFormatter extends CustomerAddressFormatterCore {};
abstract class AbstractForm extends AbstractFormCore {};
class CustomerForm extends CustomerFormCore {};
class SupplierAddress extends SupplierAddressCore {};
class QqUploadedFileForm extends QqUploadedFileFormCore {};
abstract class ModuleGraphEngine extends ModuleGraphEngineCore {};
abstract class Module extends ModuleCore {};
abstract class CarrierModule extends CarrierModuleCore {};
abstract class ModuleGraph extends ModuleGraphCore {};
abstract class ModuleGrid extends ModuleGridCore {};
abstract class ModuleGridEngine extends ModuleGridEngineCore {};
class Connection extends ConnectionCore {};
class TaxManagerFactory extends TaxManagerFactoryCore {};
class TaxRulesGroup extends TaxRulesGroupCore {};
class TaxRule extends TaxRuleCore {};
class TaxConfiguration extends TaxConfigurationCore {};
class TaxRulesTaxManager extends TaxRulesTaxManagerCore {};
class TaxCalculator extends TaxCalculatorCore {};
class Tax extends TaxCore {};
abstract class TaxManagerModule extends TaxManagerModuleCore {};
class AddressChecksum extends AddressChecksumCore {};
