<div class="span3">
    <div class="accordion" id="sidebar">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#dashboard">
                    <i class="icon-home"></i> Dashboard
                </a>
            </div>
            <div id="dashboard" class="accordion-body collapse <?php if (isset($dashboard)) echo "in"; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if (isset($dashboard) AND $dashboard == 'Home') echo 'class="active"'; ?>><a href="#">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#order">
                    <i class="icon-shopping-cart"></i> Orders
                </a>
            </div>
            <div id="order" class="accordion-body collapse <?php if (isset($order)) echo "in"; ?>">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li <?php if (isset($order) AND $order == 'View Order') echo 'class="active"'; ?>><a href="#">View Orders</a></li>
                        <li <?php if (isset($order) AND $order == 'Payment') echo 'class="active"'; ?>><a href="#">Payment Confirmation<span class="label label-info pull-right">+1</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#customer">
                    <i class="icon-list-alt"></i> Customers
                </a>
            </div>
            <div id="customer" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li><a href="#">View Customers</a></li>
                        <li><a href="#">Export</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#invitation">
                    <i class="icon-book"></i> Invitations
                </a>
            </div>
            <div id="invitation" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li><a href="#">Manage Invitations</a></li>
                        <li><a href="#">Upload Invitation</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#user">
                    <i class="icon-user"></i> Users
                </a>
            </div>
            <div id="user" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li><a href="#">View Users</a></li>
                        <li><a href="#">Add User</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle sidebar-menu" data-toggle="collapse" data-parent="#sidebar" href="#setting">
                    <i class="icon-wrench"></i> Setting
                </a>
            </div>
            <div id="setting" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul class="nav nav-list">
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Bla bla bla</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>