<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index.php" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase">VFA</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item" id="home">
      <a href="index.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <li class="menu-item" id="send-updates">
      <a href="../php/send-recent-updates.php" class="menu-link">
        <div data-i18n="Under Maintenance">Send Updates</div>
      </a>
    </li>
    <li class="menu-item" id="manage-farmers">
      <a href="../php/manage-farmers.php" class="menu-link">
        <div data-i18n="Under Maintenance">Manage Farmers</div>
      </a>
    </li>
    <li class="menu-item" id="contact">
      <a href="../php/contact-msg.php" class="menu-link">
        <div data-i18n="Under Maintenance">Contact Messages</div>
      </a>
    </li>
    <li class="menu-item" id="feed">
      <a href="../php/feed-post.php" class="menu-link">
        <div data-i18n="Under Maintenance">Feed Post</div>
      </a>
    </li>
  </ul>
  </li>
  <!-- Components -->
  <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
  <!-- Cards -->
  <li class="menu-item" id="new-crop">
    <a href="../php/add-new-crop.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-collection"></i>
      <div data-i18n="Basic">Add New Crop</div>
    </a>
  </li>
  <li class="menu-item" id="crop-data">
    <a href="../php/add-crop-info.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-table"></i>
      <div data-i18n="Tables">Add Crop Data</div>
    </a>
  </li>

  <li class="menu-item" id="crop-event">
    <a href="../php/add-crop-event.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-table"></i>
      <div data-i18n="Tables">Add Crop Events</div>
    </a>
  </li>
  <li class="menu-item" id="crop-disease">
    <a href="../php/add-crop-protection.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-table"></i>
      <div data-i18n="Tables">Add Crop Disease</div>
    </a>
  </li>
  <li class="menu-item" id="crop-faq">
    <a href="../php/add-crop-faq.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-table"></i>
      <div data-i18n="Tables">Add Crop FAQs</div>
    </a>
  </li>
  </ul>
</aside>
<!-- / Menu -->
<!-- setting Active class to current opened Page -->
<script>
  var path = window.location.pathname;
  var page = path.split("/").pop();
  // console.log(page);
  if (page == "index.php") {
    $("#home").addClass("active");
  } else if (page == "add-crop-event.php") {
    $("#crop-event").addClass("active");
  } else if (page == "add-crop-faq.php") {
    $("#crop-faq").addClass("active");
  } else if (page == "add-crop-info.php") {
    $("#crop-data").addClass("active");
  } else if (page == "add-crop-protection.php") {
    $("#crop-disease").addClass("active");
  } else if (page == "add-new-crop.php") {
    $("#new-crop").addClass("active");
  } else if (page == "contact-msg.php") {
    $("#contact").addClass("active");
  } else if (page == "feed-post.php") {
    $("#feed").addClass("active");
  } else if (page == "manage-farmers.php") {
    $("#manage-farmers").addClass("active");
  } else if (page == "send-recent-updates.php") {
    $("#send-updates").addClass("active");
  } else{
    console.log("No Active link set")
  }
</script>