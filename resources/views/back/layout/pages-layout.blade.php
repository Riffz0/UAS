
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/back/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/back/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/back/vendors/images/favicon-16x16.png"
		/>

	
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
	
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/back/vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/back/vendors/styles/style.css" />

		
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		

		<link rel="stylesheets" href="/extra-assets/ijaboCropTool/ijaboCropTool.min.css">
		@livewireStyles
        @stack('stylesheets')
	</head>
	<body>
		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div class="search-toggle-icon bi bi-search"data-toggle="header_search">
				</div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input type="text" class="form-control search-input" placeholder="Search Here"/>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>
				<div class="user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<i class="icon-copy dw dw-notification"></i>
							<span class="badge notification-active"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="notification-list mx-h-350 customscroll">
								<ul>
									<li>
										<a>
											
										</a>
									</li>
									<li>
										<a>
										
										</a>
									</li>
									<li>
										<a>
											
										</a>
									</li>
									<li>
										<a>
											
										</a>
									</li>
									<li>
										<a>
											
										</a>
									</li>
									<li>
										<a>
											
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>


				{{--<livewire:admin-seller-header-profile-info>--}}
				@livewire('admin-seller-header-profile-info')

				
				
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a>
					<img src="/back/vendors/images/logouas2.png" alt="" class="dark-logo" />
					<img src="/back/vendors/images/logouas1.png" alt="" class="light-logo"/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">

						@if(Route::is('admin.*'))
						<li>
							<a href="{{ route('admin.home') }}" class="dropdown-toggle no-arrow">
								<span class="micon fa fa-home"></span
								><span class="mtext">Home</span>
							</a>
							
						</li>
						
						<li>
							<a href="{{ route('admin.client') }}" class="dropdown-toggle no-arrow">
								<span class="micon fa fa-list-alt"></span
								><span class="mtext">Client</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Settings</div>
						</li>
						
						<li>
							<a href="{{ route('admin.profile') }}"
								class="dropdown-toggle no-arrow">
								<span class="micon fa fa-user"></span>
								<span class="mtext"
									>Profile
									
								</span>
							</a>
						</li>
						<li>
							<a
								href="{{ route('admin.settings') }} "
								
								class="dropdown-toggle no-arrow {{  Route::is('admin.settings') ? 'active' : ''}}"
							>
								<span class="micon icon-copy fi-widget"></span>
								<span class="mtext"
									>Settings
									
								</span>
							</a>
						</li>
						@else
						<li>
							<a href="{{ route('admin.home') }}" class="dropdown-toggle no-arrow">
								<span class="micon fa fa-home"></span
								><span class="mtext">Home</span>
							</a>
							
						</li>
						
						<li>
							<a href="invoice.html" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-receipt-cutoff"></span
								><span class="mtext">Invoice</span>
							</a>
						</li>
						<li>
							<div class="dropdown-divider"></div>
						</li>
						<li>
							<div class="sidebar-small-cap">Settings</div>
						</li>
						
						<li>
							<a
								href="{{ route('admin.profile') }}"
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								<span class="micon fa fa-user"></span>
								<span class="mtext"
									>Profile
									
								</span>
							</a>
						</li>
						@endif
					
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>
		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">

					<div>
						@yield('content')
					</div>
				</div>
				<div class="">

				</div>
			</div>
		</div>
	
		<!-- js -->
		<script src="/back/vendors/scripts/core.js"></script>
		<script src="/back/vendors/scripts/script.min.js"></script>
		<script src="/back/vendors/scripts/process.js"></script>
		<script src="/back/vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="/back/vendors/scripts/dashboard3.js"></script>
		<script>
			if(navigator.userAgent.indexOf("Firefox") != -1){
				history.pushState(null,null, document.URL);
				window.addEventListener('popstate', function(){
					history.pushState(null,null, document.URL);
				});
			}
		</script>
		<script src="/extra-assets/ijaboCropToolijaboCropTool.min.js"></script>
		
		<script>
			window.addEventListener('showToastr', function(event){
				toastr.remove();
				if(event.detail.type === 'info'){toastr.info(event.detail.message);}
				else if(event.detail.type === 'success'){toastr.success(event.detail.message);}
				else if(event.detail.type === 'error'){toastr.error(event.detail.message);}
				else if(event.detail.type === 'warning'){toastr.warning(event.detail.message);}
				else{return false;}
			});
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		</script>
		 @livewireScripts
		@stack('scripts')
	</body>
</html>
