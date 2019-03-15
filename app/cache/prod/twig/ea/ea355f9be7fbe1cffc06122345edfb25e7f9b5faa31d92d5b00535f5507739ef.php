<?php

/* __string_template__e6121b7ed2a9afb5a9d03e232ecfc0eb7cfe9e9d07780806c766650142d5d9cc */
class __TwigTemplate_a8a910d5cca78719345e063b6b1cbeaaccb2d46226cf852ca69c5399cc57080e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produkte • Reitsport-Royal</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'de';
    var full_language_code = 'de';
    var full_cldr_language_code = 'de-DE';
    var country_iso_code = 'AT';
    var _PS_VERSION_ = '1.7.0.6';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Eine neue Bestellung ist in Ihrem Shop eingegangen.';
    var order_number_msg = 'Bestell-Nr. ';
    var total_msg = 'Gesamt: ';
    var from_msg = 'von ';
    var see_order_msg = 'Diese Bestellung anzeigen';
    var new_customer_msg = 'Neue Kundenregistrierung im Shop.';
    var customer_name_msg = 'Kunde ';
    var new_msg = 'Ihr Shop hat eine neue Nachricht erhalten.';
    var see_msg = 'Nachricht lesen';
    var token = '17ac8fa06b511669601c9237cf00a4c3';
    var token_admin_orders = 'e21235be8e29169e17d3b150349c30b0';
    var token_admin_customers = '393165a9d3253ed4bd646cb11f990ca0';
    var token_admin_customer_threads = '7ae103de1cfdc60b54e9bbd672b57a0f';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '42f07e83c574913876a1092925be61f3';
    var choose_language_translate = 'Wählen Sie eine Sprache';
    var default_language = '1';
    var admin_modules_link = '/admin-reiter/index.php/module/catalog/recommended?_token=PkuVJFylxWpd6XU6ozrB_A-Y58PplA870-uU6z-c9QM';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Aktualisierung durchgeführt!';
    var errorLogin = 'PrestaShop konnte sich nicht bei Addons anmelden. Überprüfen Sie bitte Ihre Zugangsdaten und Ihre Internetverbindung.';
    var search_product_msg = 'Artikel suchen';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-reiter/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-reiter/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin-reiter\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/admin-reiter/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.0.6\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.0.6\"></script>
<script type=\"text/javascript\" src=\"/admin-reiter/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin-reiter/themes/default/js/vendor/nv.d3.min.js\"></script>


  

";
        // line 71
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <a class=\"logo pull-left\" href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminDashboard&amp;token=8912cc78c122a1d20171bc1cde234ca3\"></a>

    <div class=\"component pull-left\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Schnellzugriff</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCategories&amp;addcategory&amp;token=77f3456f49d913f0db617c1017785204\"
                 data-item=\"Neue Kategorie\"
      >Neue Kategorie</a>
          <a class=\"dropdown-item\"
         href=\"http://reitsport-royal.com/admin-reiter/index.php/productnew?token=1717d022f0b6f09a9c8d5edaca1f50f8\"
                 data-item=\"Neuer Artikel\"
      >Neuer Artikel</a>
          <a class=\"dropdown-item\"
         href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c7f92f4e3978d688a862bbebca0dfdf3\"
                 data-item=\"Neuer Ermäßigungsgutschein\"
      >Neuer Ermäßigungsgutschein</a>
          <a class=\"dropdown-item\"
         href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrders&amp;token=e21235be8e29169e17d3b150349c30b0\"
                 data-item=\"Orders\"
      >Orders</a>
        <hr>
        <a
      class=\"dropdown-item js-quick-link\"
      data-rand=\"199\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/productform8?-Y58PplA870-uU6z-c9QM\"
      data-post-link=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminQuickAccesses&token=bc25afa225bb1becb4124c63f1bd171f\"
      data-prompt-text=\"Bitte dieses Kürzel angeben:\"
      data-link=\"Produkte - Liste\"
    >
      <i class=\"material-icons\">add_circle_outline</i>
      Zu Favoriten hinzufügen
    </a>
    <a class=\"dropdown-item\" href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminQuickAccesses&token=bc25afa225bb1becb4124c63f1bd171f\">
      <i class=\"material-icons\">settings</i>
      Schnellzugänge verwalten
    </a>
  </div>
</div>
</div>
    <div class=\"component\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin-reiter/index.php?controller=AdminSearch&amp;token=474b074fb46c5eeaac0c326629bfa353\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Suche (z.B. Bestell-Nr., Kundenname ...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Überall
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Überall\" href=\"#\" data-value=\"0\" data-placeholder=\"Wonach suchen Sie?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Überall</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Artikelname, Bestandseinheit, Artikel-Nr. ...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Katalog
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Kunden nach Name\" href=\"#\" data-value=\"2\" data-placeholder=\"E-Mail , Name...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Kunden nach Name
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Kunden nach IP-Adresse\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Kunden nach IP-Adresse</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Bestellungen\" href=\"#\" data-value=\"3\" data-placeholder=\"Bestell-Nr.\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Bestellungen
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Rechnungen\" href=\"#\" data-value=\"4\" data-placeholder=\"Rechnungsnummer\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Rechnungen
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Warenkörbe\" href=\"#\" data-value=\"5\" data-placeholder=\"Warenkorb-ID\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Warenkörbe
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Module\" href=\"#\" data-value=\"7\" data-placeholder=\"Modul-Name\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Module
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">SUCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/admin%40reitsport-royal.com.jpg\" /><br>
      Reitsport Royal
    </div>
    <hr>
    <a class=\"employee-link\" href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminEmployees&amp;token=42f07e83c574913876a1092925be61f3&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Ihr Profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLogin&amp;token=7a1e21632b8750b0b80e164267f2c0b1&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Abmelden
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-md-right\"><div class=\"notification-center dropdown\">
  <div class=\"notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Bestellungen<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Kunden<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Nachrichten<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell kein neuer Kunde!<br>
              Haben Sie die <strong><a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCarts&token=cb3e246e5f22798a785da5206fd6469d&action=filterOnlyAbandonedCarts\">verwaisten Warenkörbe</a></strong> überprüft?<br>
              Ihre nächste Bestellung könnte sich dort verstecken!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell kein neuer Kunde!<br>
              Haben Sie in der letzten Zeit Werbe-Mails versandt?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell keine neuen Nachrichten <br>
              Mehr Zeit für Anderes!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      von <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - Anmelden <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://reitsport-royal.com/\" target= \"_blank\">Reitsport-Royal</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminDashboard&amp;token=8912cc78c122a1d20171bc1cde234ca3\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrders&amp;token=e21235be8e29169e17d3b150349c30b0\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i> <span>Bestellungen</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrders&amp;token=e21235be8e29169e17d3b150349c30b0\" class=\"link\"> Bestellungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminInvoices&amp;token=48c9c5427a23f7b6ace25a2c8642eac1\" class=\"link\"> Rechnungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminSlip&amp;token=a19f0b344fd2627828cef5f33dd68111\" class=\"link\"> Gutschriften
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminDeliverySlip&amp;token=deded3947513e6ea021e3d104d9f3030\" class=\"link\"> Lieferscheine
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCarts&amp;token=cb3e246e5f22798a785da5206fd6469d\" class=\"link\"> Warenkörbe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/admin-reiter/index.php/product/catalog?_token=PkuVJFylxWpd6XU6ozrB_A-Y58PplA870-uU6z-c9QM\" class=\"link\">
                    <i class=\"material-icons\">store</i> <span>Katalog</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/admin-reiter/index.php/product/catalog?_token=PkuVJFylxWpd6XU6ozrB_A-Y58PplA870-uU6z-c9QM\" class=\"link\"> Produkte
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCategories&amp;token=77f3456f49d913f0db617c1017785204\" class=\"link\"> Kategorien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminTracking&amp;token=72164f73ae8b1c73a0510c4dfa41610c\" class=\"link\"> Kontrollübersicht
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAttributesGroups&amp;token=fe2a1245b4ff86f4e513da5d2523d493\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminManufacturers&amp;token=b3d7de343374f8b7ca3a476bf611fcdb\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAttachments&amp;token=ee2afcba9d5c2cb0c10be05883baa26f\" class=\"link\"> Anhänge
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCartRules&amp;token=c7f92f4e3978d688a862bbebca0dfdf3\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomers&amp;token=393165a9d3253ed4bd646cb11f990ca0\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i> <span>Kunden</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomers&amp;token=393165a9d3253ed4bd646cb11f990ca0\" class=\"link\"> Kunden
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAddresses&amp;token=8c9a39fa81b930d28ce74607b9874fe1\" class=\"link\"> Adressen
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomerThreads&amp;token=7ae103de1cfdc60b54e9bbd672b57a0f\" class=\"link\">
                    <i class=\"material-icons\">chat</i> <span>Kundenservice</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomerThreads&amp;token=7ae103de1cfdc60b54e9bbd672b57a0f\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrderMessage&amp;token=a360b2191b81c02c385ae78688a7b297\" class=\"link\"> Bestellnachrichten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminReturn&amp;token=40148a1f324996b35c624170043116fb\" class=\"link\"> Warenrücksendungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminStats&amp;token=fec320326a6d653bb1c21035dc86ac1c\" class=\"link\">
                    <i class=\"material-icons\">assessment</i> <span>Statistiken</span>
                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"41\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"42\">
                  <a href=\"/admin-reiter/index.php/module/catalog?_token=PkuVJFylxWpd6XU6ozrB_A-Y58PplA870-uU6z-c9QM\" class=\"link\">
                    <i class=\"material-icons\">extension</i> <span>Modules</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/admin-reiter/index.php/module/catalog?_token=PkuVJFylxWpd6XU6ozrB_A-Y58PplA870-uU6z-c9QM\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAddonsCatalog&amp;token=77185b58d46089f7f186027778a26686\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminThemes&amp;token=426a374f1bb3f24d2856b8130ad010c4\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i> <span>Design</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminThemes&amp;token=426a374f1bb3f24d2856b8130ad010c4\" class=\"link\"> Templates &amp; Vorlagen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminThemesCatalog&amp;token=13fc49fc7c457ff9140b5f7b18827cf7\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCmsContent&amp;token=ca4a9bf68a48719af6041582b4a886b4\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminModulesPositions&amp;token=73005f6ff4d76a807a8392ea25108185\" class=\"link\"> Positionen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminImages&amp;token=4406b7760f3a17bded474f1d5db501cb\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLinkWidget&amp;token=dc259c5f94d1158bdf4efb952ce7dcbb\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCarriers&amp;token=0470e1640ff2a50a9afd12985eddbc2a\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i> <span>Versand</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCarriers&amp;token=0470e1640ff2a50a9afd12985eddbc2a\" class=\"link\"> Versanddienste
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminShipping&amp;token=2084ae8e3d480b5f9be7bd09d9251256\" class=\"link\"> Voreinstellungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPayment&amp;token=464fca12c15d5bf2f140c34cebbe8b17\" class=\"link\">
                    <i class=\"material-icons\">payment</i> <span>Zahlung</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPayment&amp;token=464fca12c15d5bf2f140c34cebbe8b17\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPaymentPreferences&amp;token=22fbc810066e08df1300b96067a5147a\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLocalization&amp;token=4cb370675c9e3791231cdcbf069b3350\" class=\"link\">
                    <i class=\"material-icons\">language</i> <span>International</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLocalization&amp;token=4cb370675c9e3791231cdcbf069b3350\" class=\"link\"> Lokalisierung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCountries&amp;token=6102ee634841ec26d82ffef878d17c0f\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminTaxes&amp;token=175bd0535616b9c8750331b0e20ccd50\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminTranslations&amp;token=abdd6e7f0ea84b5f41400758d411d0e9\" class=\"link\"> Übersetzungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"72\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPreferences&amp;token=003f0a962574ca348952cf9ae74282a9\" class=\"link\">
                    <i class=\"material-icons\">settings</i> <span>Shop Parameters</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPreferences&amp;token=003f0a962574ca348952cf9ae74282a9\" class=\"link\"> Allgemein
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrderPreferences&amp;token=af464b76fd313b22108cae6f9ffde361\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPPreferences&amp;token=a34aff150d61ee10106db0e79b44e2a8\" class=\"link\"> Produkte
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomerPreferences&amp;token=0bf1da503463708d3d01d7fdca2e1d13\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminContacts&amp;token=3d5dbd0fb822b86fd5ed9389a0626e90\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminMeta&amp;token=da93b1d2db77f1c7a9dba8be68a9b765\" class=\"link\"> Traffic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminSearchConf&amp;token=bb7e80ec54fc04d51164c70890212d85\" class=\"link\"> Suche
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminInformation&amp;token=242c1a224e538a47dfa42793c57926a3\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i> <span>Erweiterte Einstellungen</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminInformation&amp;token=242c1a224e538a47dfa42793c57926a3\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPerformance&amp;token=583eed8a6bb98dcb9bc03b3df6b43e6e\" class=\"link\"> Leistung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAdminPreferences&amp;token=65ad389b2330636986931177222b45b1\" class=\"link\"> Verwaltung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminEmails&amp;token=be76a8230dcdd307101e480a9309bbd9\" class=\"link\"> E-Mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminImport&amp;token=b739cff4e5c08e019524083a94a32d62\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminEmployees&amp;token=42f07e83c574913876a1092925be61f3\" class=\"link\"> Mitarbeiter
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminRequestSql&amp;token=e1fee496319033a750c0c813d05d3ecd\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLogs&amp;token=b487c2fb5e48edfa8a75797d60639fb9\" class=\"link\"> Log-Dateien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminWebservice&amp;token=595c32caa1d3cfc870f2b9f6e89516d9\" class=\"link\"> Webdienste
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Starten Sie Ihren Shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">7%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:7.1428571428571%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Fortsetzen</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Quick Start beenden</a>
  </div>
</div>


</nav>


<div id=\"main-div\">

  
        
    <div class=\"content-div -notoolbar\">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 7.1428571428571%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Weiter</button>
  <a class=\"onboarding-button-shut-down\">Einführung überspringen</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){

    onBoarding = new OnBoarding(1, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Willkommen in Ihrem Shop!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hallo, ich bin Preston. Folgen Sie mir einfach auf einen kleinen Rundgang.<\\/p>\\n    <p>Hier lernen Sie die Grundlagen kennen, die jeder Shoper\\u00f6ffnung vorausgehen:\\n    Legen Sie den ersten Artikel an. Passen Sie den Shop an, richten Sie Versanddienste und Zahlungsarten ein ...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Los gehts!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Sp\\u00e4ter<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Auf zur Artikelerfassung\",\"subtitle\":{\"1\":\"Wie m\\u00f6chten Sie es beschreiben? Wichtig ist, was Ihre Kunden wissen wollen!\",\"2\":\"Treffende und ansprechende Informationen einf\\u00fcgen. Keine Bange, das k\\u00f6nnen Sie jederzeit wieder \\u00e4ndern.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Geben Sie dem Artikel einen treffende Namen.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Zun\\u00e4chst die Pflichtangaben. \\u00dcber die anderen Reiter k\\u00f6nnen optionmal erweiterte Angaben erfasst werden.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ein oder mehrere Bilder hinzuf\\u00fcgen, damit der Artikel ansprechend pr\\u00e4sentiert wird!\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Zu welchem Preis wollen Sie den Artikel verkaufen?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Super! Ihr erster Artikel! Sieht doch gut aus, oder?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:last-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Individualisieren Sie Ihren Shop\",\"subtitle\":{\"1\":\"Wie soll Ihr Shop aussehen? Was macht ihn so unverwechselbar?\",\"2\":\"Passen Sie das Template an oder suchen Sie sich ein passendes Design aus dem Template-Angebot aus.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ein guter Anfang w\\u00e4re schon mal ein eigenes Logo hier!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wenn Sie wirklich etwas Besonderes suchen, schauen Sie sich die Templates im Angebot an!\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Bezahlm\\u00f6glichkeiten einrichten\",\"subtitle\":{\"1\":\"Wie sollen Ihre Kunden bezahlen k\\u00f6nnen?\",\"2\":\"Passen Sie sich dem Markt an: F\\u00fcgen Sie die bei Ihren Kunden beliebten Zahlungsarten hinzu!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Die Zahlungsarten sind bereits f\\u00fcr Ihre Kunden verf\\u00fcgbar.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Sie k\\u00f6nnen aber von hier weitere Zahlungsarten hinzuf\\u00fcgen!\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Versandoptionen ausw\\u00e4hlen\",\"subtitle\":{\"1\":\"Welche Versandarten bevorzugen Sie?\",\"2\":\"W\\u00e4hlen Sie die Versandarten, die wohl am ehesten zu Ihren Kunden passen. Sie k\\u00f6nnen Versanddienste manuell erfassen oder auch fertige Versandmodule hinzuf\\u00fcgen.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Diese Versandarten sind aktuell f\\u00fcr Ihren Shop verf\\u00fcgbar.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Durch Einrichten zus\\u00e4tzlicher Versanddienste k\\u00f6nnen Sie mehr Versandoptionen anbieten\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Verbessern Sie Ihren Shop durch Module\",\"subtitle\":{\"1\":\"Mithilfe von Modulen k\\u00f6nnen Sie die Shopfunktionen erweitern bzw. die vorhandenen verwalten.\",\"2\":\"Einige Module sind bereits vorinstalliert, andere k\\u00f6nnen kostenlos oder auch nur als Bezahlmodule erh\\u00e4ltlich sein - schauen Sie, was unsere Auswahl f\\u00fcr Sie bereit h\\u00e4lt!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Seite 1 (Auswahl) bietet Ihnen eine Auswahl von Kaufmodulen. Die vorhandenen verwalten Sie unter \\\"Installierte Module\\\". Im dritten Fenster finden Sie Hinweise auf Versions-Updates oder fehlende Modul-Einstellungen.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">\\u00dcbernehmen Sie!<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    Das waren erst die Grundlagen, es gibt aber noch viel mehr zu entdecken!<br \\/>\\n    Hier ein paar Links zur Vertiefung Ihrer Kenntnisse:\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS16\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <div class=\\\"starter-guide\\\"><\\/div>\\n          <span class=\\\"link\\\">Quick Start<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <div class=\\\"forum\\\"><\\/div>\\n          <span class=\\\"link\\\">Forum<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"training\\\"><\\/div>\\n          <span class=\\\"link\\\">Training<\\/span>\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <div class=\\\"video-tutorial\\\"><\\/div>\\n          <span class=\\\"link\\\">Videoanleitung<\\/span>\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">Ich bin bereit!<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 0, baseDir+\"modules/welcome/welcome-api.php\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hallo! Wissen Sie nicht weiter?</p>    <p>Um fortzufahren, klicken Sie hier:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Weiter</button>    </div>    <p>Um die Einführung mit Quick Start abzubrechen, klicken Sie hier:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quick Start beenden</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Schritt <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Weiter</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1012
        $this->displayBlock('content_header', $context, $blocks);
        // line 1013
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1014
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1015
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1016
        echo "
        </div>
      </div>

    </div>

  
</div>


  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Ladezeit \"></i> 7.340s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Kontakt
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug-Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-DE&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Training
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-DE&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/de/login?email=admin%40reitsport-royal.com&amp;firstname=Reitsport&amp;lastname=Royal&amp;website=http%3A%2F%2Freitsport-royal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin-reiter/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Verbinden Sie Ihren Shop mit Prestashops Marktplatz, um automatisch alle Kaufmodule zu importieren.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Sie haben noch keinen Account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Entdecken Sie die Vielfalt der PrestaShop Addons! Stöbern Sie im offiziellen PrestaShop Martkplatz mit aktuell über 3 500 innovativen Templates und modularen Erweiterungen - ob es sich nun um Optimierung der Wechselkurse, Erhöhung der Zugriffsrate, Maßnahmen zur Kundenbindung oder Rentabilitätssteigerung handelt.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Wechseln Sie zu PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/de/forgot-your-password\">Ich habe mein Passwort vergessen</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/de/login?email=admin%40reitsport-royal.com&amp;firstname=Reitsport&amp;lastname=Royal&amp;website=http%3A%2F%2Freitsport-royal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tErstellen Sie ein Konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Anmelden
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>
  </div>

";
        // line 1161
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 71
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1012
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1013
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1014
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1015
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1161
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__e6121b7ed2a9afb5a9d03e232ecfc0eb7cfe9e9d07780806c766650142d5d9cc";
    }

    public function getDebugInfo()
    {
        return array (  1240 => 1161,  1235 => 1015,  1230 => 1014,  1225 => 1013,  1220 => 1012,  1211 => 71,  1203 => 1161,  1056 => 1016,  1053 => 1015,  1050 => 1014,  1047 => 1013,  1045 => 1012,  100 => 71,  28 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
