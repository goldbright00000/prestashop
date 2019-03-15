<?php

/* __string_template__1a299200969f2ef4b007006f318f5651f83a5abc70536cc57308bf3c13cfabd8 */
class __TwigTemplate_a78c56e70242fdc9ac39e610aec430d3a65d4e2542a62f222b8d37e4579bf47f extends Twig_Template
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

<title>Reitsport-Royal</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
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
    var token = 'cf7659a5a4b759bb2b01dee425cbd6f2';
    var token_admin_orders = '40ca1612d764281dc4ff8a0850bb756e';
    var token_admin_customers = '42edadcd0c4ff9bddf2d280e3adc665f';
    var token_admin_customer_threads = '8e266f982e0024d1692d88f74e9fe34a';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = 'af678280f103dabc748dd95ab24ce838';
    var choose_language_translate = 'Wählen Sie eine Sprache';
    var default_language = '1';
    var admin_modules_link = '/admin-reiter/index.php/module/catalog/recommended?_token=mPwJdDyHnJLtJSJK1BtU3VZc1s_XlA_eHYfZmzpF6Io';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualisierung durchgeführt!';
    var errorLogin = 'PrestaShop konnte sich nicht bei Addons anmelden. Überprüfen Sie bitte Ihre Zugangsdaten und Ihre Internetverbindung.';
    var search_product_msg = 'Artikel suchen';
  </script>

      <link href=\"/admin-reiter/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin-reiter/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin-reiter\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/admin-reiter/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.0.6\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.0.6\"></script>
<script type=\"text/javascript\" src=\"/admin-reiter/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin-reiter/themes/default/js/vendor/nv.d3.min.js\"></script>


  

";
        // line 69
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminmodules\">



<header>
  <nav class=\"main-header\">

    
    

    
    <a class=\"logo pull-left\" href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminDashboard&amp;token=7b38837983b4b9942d613620d4b0d458\"></a>

    <div class=\"component pull-left\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Schnellzugriff</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCategories&amp;addcategory&amp;token=12f283b6e44f4caede9054070963ed01\"
         target=\"_blank\"         data-item=\"Neue Kategorie\"
      >Neue Kategorie</a>
          <a class=\"dropdown-item\"
         href=\"http://reitsport-royal.com/admin-reiter/index.php/productnew?token=8a9c6b4d6aa6d96705947e6a9f442b28\"
         target=\"_blank\"         data-item=\"Neuer Artikel\"
      >Neuer Artikel</a>
          <a class=\"dropdown-item\"
         href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=97f25d1a082219d2b073e2f68a07f122\"
                 data-item=\"Neuer Ermäßigungsgutschein\"
      >Neuer Ermäßigungsgutschein</a>
          <a class=\"dropdown-item\"
         href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrders&amp;token=40ca1612d764281dc4ff8a0850bb756e\"
                 data-item=\"Orders\"
      >Orders</a>
        <hr>
        <a
      class=\"dropdown-item js-quick-link\"
      data-rand=\"161\"
      data-icon=\"icon-AdminParentModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/modulemanage\"
      data-post-link=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminQuickAccesses&token=2213c2b0b9d118880ddf11e26b99ff1f\"
      data-prompt-text=\"Bitte dieses Kürzel angeben:\"
      data-link=\" - Liste\"
    >
      <i class=\"material-icons\">add_circle_outline</i>
      Zu Favoriten hinzufügen
    </a>
    <a class=\"dropdown-item\" href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminQuickAccesses&token=2213c2b0b9d118880ddf11e26b99ff1f\">
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
      action=\"/admin-reiter/index.php?controller=AdminSearch&amp;token=b33ececc79de7d04b40375fffc3495b1\"
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
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/office%40reitsport-royal.com.jpg\" /><br>
      Reitsport-Royal Office
    </div>
    <hr>
    <a class=\"employee-link\" href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminEmployees&amp;token=af678280f103dabc748dd95ab24ce838&amp;id_employee=2&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Ihr Profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLogin&amp;token=2bf6f14b1f1b82fdd400cd200301dfd7&amp;logout\">
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
              Haben Sie die <strong><a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCarts&token=21f8a88631659670a5a9a6a0ad3f3f02&action=filterOnlyAbandonedCarts\">verwaisten Warenkörbe</a></strong> überprüft?<br>
              Ihre nächste Bestellung könnte sich dort verstecken!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell kein neuer Kunde!<br>
              Waren Sie in letzter Zeit in den Sozialen Medien aktiv?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aktuell keine neuen Nachrichten <br>
              Keine Neuigkeiten sind gute Neuigkeiten, stimmt's?
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
            <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminDashboard&amp;token=7b38837983b4b9942d613620d4b0d458\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrders&amp;token=40ca1612d764281dc4ff8a0850bb756e\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i> <span>Bestellungen</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrders&amp;token=40ca1612d764281dc4ff8a0850bb756e\" class=\"link\"> Bestellungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminInvoices&amp;token=1585879f943b7fcaa7e65892543ccc55\" class=\"link\"> Rechnungen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminSlip&amp;token=2f68b3ecec7da30cfb94ab87ecfa951e\" class=\"link\"> Gutschriften
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminDeliverySlip&amp;token=a36ec4219c14f1807d7b3f679d301189\" class=\"link\"> Lieferscheine
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCarts&amp;token=21f8a88631659670a5a9a6a0ad3f3f02\" class=\"link\"> Warenkörbe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\">
                  <a href=\"/admin-reiter/index.php/product/catalog?_token=mPwJdDyHnJLtJSJK1BtU3VZc1s_XlA_eHYfZmzpF6Io\" class=\"link\">
                    <i class=\"material-icons\">store</i> <span>Katalog</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\">
                              <a href=\"/admin-reiter/index.php/product/catalog?_token=mPwJdDyHnJLtJSJK1BtU3VZc1s_XlA_eHYfZmzpF6Io\" class=\"link\"> Produkte
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCategories&amp;token=12f283b6e44f4caede9054070963ed01\" class=\"link\"> Kategorien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminTracking&amp;token=39d1b055712765aad37d7663ddf9a7f5\" class=\"link\"> Kontrollübersicht
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAttributesGroups&amp;token=38e74f573c2cf7475d80a8a718ea55a1\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminManufacturers&amp;token=bebf25f916288cacf41f2e9c8ec3211d\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAttachments&amp;token=3e1ad3050575c8b77134524a057159f3\" class=\"link\"> Anhänge
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCartRules&amp;token=97f25d1a082219d2b073e2f68a07f122\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomers&amp;token=42edadcd0c4ff9bddf2d280e3adc665f\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i> <span>Kunden</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomers&amp;token=42edadcd0c4ff9bddf2d280e3adc665f\" class=\"link\"> Kunden
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAddresses&amp;token=a52cb996024707cf730e362b024e9acf\" class=\"link\"> Adressen
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomerThreads&amp;token=8e266f982e0024d1692d88f74e9fe34a\" class=\"link\">
                    <i class=\"material-icons\">chat</i> <span>Kundenservice</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomerThreads&amp;token=8e266f982e0024d1692d88f74e9fe34a\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrderMessage&amp;token=f0e3a9292a5beb5c538e87d181f85c3b\" class=\"link\"> Bestellnachrichten
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminReturn&amp;token=783870902125276b70a1db398f697bf6\" class=\"link\"> Warenrücksendungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminStats&amp;token=b6e68ed32bbdf068620c2aeaf19b454b\" class=\"link\">
                    <i class=\"material-icons\">assessment</i> <span>Statistiken</span>
                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"41\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"42\">
                  <a href=\"/admin-reiter/index.php/module/catalog?_token=mPwJdDyHnJLtJSJK1BtU3VZc1s_XlA_eHYfZmzpF6Io\" class=\"link\">
                    <i class=\"material-icons\">extension</i> <span>Modules</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/admin-reiter/index.php/module/catalog?_token=mPwJdDyHnJLtJSJK1BtU3VZc1s_XlA_eHYfZmzpF6Io\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAddonsCatalog&amp;token=0e91d73bdd2fd253cbc185478128bd1c\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminThemes&amp;token=4fe7697c8d0940501953946132f72a88\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i> <span>Design</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminThemes&amp;token=4fe7697c8d0940501953946132f72a88\" class=\"link\"> Templates &amp; Vorlagen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminThemesCatalog&amp;token=cbbe64dea6fa3bccdad8e688265d49bc\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCmsContent&amp;token=2d4e7464e626df015cb25fc1aaf38f53\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminModulesPositions&amp;token=b92c9571e62f88d473a146e40c73241c\" class=\"link\"> Positionen
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminImages&amp;token=9baba541e6aadb245bc9a493ed1078ee\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLinkWidget&amp;token=395d66a8dc222430a5b038d1e72c18e9\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCarriers&amp;token=685679b9664a4f0ad98a74d7d380f381\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i> <span>Versand</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCarriers&amp;token=685679b9664a4f0ad98a74d7d380f381\" class=\"link\"> Versanddienste
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminShipping&amp;token=b638cbbc3fe7bd7447e49d9f9710354f\" class=\"link\"> Voreinstellungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPayment&amp;token=2ce390faf72faf227d879104d204e4d0\" class=\"link\">
                    <i class=\"material-icons\">payment</i> <span>Zahlung</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPayment&amp;token=2ce390faf72faf227d879104d204e4d0\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPaymentPreferences&amp;token=26079694e28c84b289d568a4663e45a6\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLocalization&amp;token=c151506e141b6d01318682111b707ce4\" class=\"link\">
                    <i class=\"material-icons\">language</i> <span>International</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLocalization&amp;token=c151506e141b6d01318682111b707ce4\" class=\"link\"> Lokalisierung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCountries&amp;token=71dc3310e09913629f54b0c881825e58\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminTaxes&amp;token=f8d2c2d0f898d1d5ab909ff1e37775cc\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminTranslations&amp;token=a02dc2b7d6279172c3985239433224d0\" class=\"link\"> Übersetzungen
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"72\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPreferences&amp;token=a658bc22fb072c1dd697355738f66ded\" class=\"link\">
                    <i class=\"material-icons\">settings</i> <span>Shop Parameters</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPreferences&amp;token=a658bc22fb072c1dd697355738f66ded\" class=\"link\"> Allgemein
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminOrderPreferences&amp;token=7bdccddfe318744c9a1043c373ddfded\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPPreferences&amp;token=5dca420c8d1d4807aab167ef6d4d9b7a\" class=\"link\"> Produkte
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminCustomerPreferences&amp;token=41a6fe57c4afb1bd29eecc0dd8ba5b18\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminContacts&amp;token=51840a4ade3b409a5476f9f86f953e3a\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminMeta&amp;token=c570a55bdff758b79c9e0f83b877f864\" class=\"link\"> Traffic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminSearchConf&amp;token=eb51675678402ac85edbb6414476d569\" class=\"link\"> Suche
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminInformation&amp;token=bdeb033bb0418751b7e0d06c289916ee\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i> <span>Erweiterte Einstellungen</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminInformation&amp;token=bdeb033bb0418751b7e0d06c289916ee\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminPerformance&amp;token=3492d1739b4ea2045b43df7a8c4c2d34\" class=\"link\"> Leistung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminAdminPreferences&amp;token=ff0db80e00d3704b33408f534f860060\" class=\"link\"> Verwaltung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminEmails&amp;token=b6fe696612f31198035b7dedd9d10634\" class=\"link\"> E-Mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminImport&amp;token=60e25d6e5c9c322ee4f47d219defe1af\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminEmployees&amp;token=af678280f103dabc748dd95ab24ce838\" class=\"link\"> Mitarbeiter
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminRequestSql&amp;token=c10ac504bd11a5174ceb1cf418101991\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminLogs&amp;token=c4a9b26e7c22ff40560bd7640b297cd0\" class=\"link\"> Log-Dateien
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminWebservice&amp;token=30498ff27b08ad65a439295bd33d0218\" class=\"link\"> Webdienste
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://reitsport-royal.com/admin-reiter/index.php?controller=AdminParentModulesSf&amp;token=c8f97f82a6d4ecd07ca4442e2371e1e5\">Modules</a>
                  </li>
      
      
    </ol>
  

  
    <h2 class=\"title\">
      Installierte Module verwalten    </h2>
  

  
    <div class=\"toolbar-icons\">
                        
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Modul hochladen\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Modul hochladen</span>
          </a>
                                
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Mit dem Addons Marktplatz verbinden\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Mit dem Addons Marktplatz verbinden</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Hilfe\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/admin-reiter/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fde%252Fdoc%252FAdminModules%253Fversion%253D1.7.0.6%2526country%253Dde/Hilfe?_token=mPwJdDyHnJLtJSJK1BtU3VZc1s_XlA_eHYfZmzpF6Io\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Hilfe</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\">
                <a class=\"tab\" href=\"/admin-reiter/index.php/module/catalog?_token=mPwJdDyHnJLtJSJK1BtU3VZc1s_XlA_eHYfZmzpF6Io\">Selection</a>

                <a class=\"tab current\" href=\"/admin-reiter/index.php/module/manage?_token=mPwJdDyHnJLtJSJK1BtU3VZc1s_XlA_eHYfZmzpF6Io\">Installed modules</a>

                <a class=\"tab\" href=\"/admin-reiter/index.php/module/notifications?_token=mPwJdDyHnJLtJSJK1BtU3VZc1s_XlA_eHYfZmzpF6Io\">Notifications</a>

            </div>
    
</div>
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
\t\t\t\t\t<a href=\"https://addons.prestashop.com/de/login?email=office%40reitsport-royal.com&amp;firstname=Reitsport-Royal&amp;lastname=Office&amp;website=http%3A%2F%2Freitsport-royal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin-reiter/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/de/login?email=office%40reitsport-royal.com&amp;firstname=Reitsport-Royal&amp;lastname=Office&amp;website=http%3A%2F%2Freitsport-royal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\">
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
    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1045
        $this->displayBlock('content_header', $context, $blocks);
        // line 1046
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1047
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1048
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1049
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
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Ladezeit \"></i> 0.662s</span>
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
\t\t\t\t\t<a href=\"https://addons.prestashop.com/de/login?email=office%40reitsport-royal.com&amp;firstname=Reitsport-Royal&amp;lastname=Office&amp;website=http%3A%2F%2Freitsport-royal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin-reiter/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/de/login?email=office%40reitsport-royal.com&amp;firstname=Reitsport-Royal&amp;lastname=Office&amp;website=http%3A%2F%2Freitsport-royal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-DE&amp;utm_content=download#createnow\">
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
        // line 1194
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 69
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1045
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1046
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1047
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1048
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1194
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
        return "__string_template__1a299200969f2ef4b007006f318f5651f83a5abc70536cc57308bf3c13cfabd8";
    }

    public function getDebugInfo()
    {
        return array (  1273 => 1194,  1268 => 1048,  1263 => 1047,  1258 => 1046,  1253 => 1045,  1244 => 69,  1236 => 1194,  1089 => 1049,  1086 => 1048,  1083 => 1047,  1080 => 1046,  1078 => 1045,  98 => 69,  28 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
