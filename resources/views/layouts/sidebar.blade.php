@php
	$kategori_menu = Session::get("kategori_menu");
	//$menu = Session::get("menu");
	$menu = Session::get("menu_urutan");
	echo '<div style="display: none;" name="wkwkwk">'.json_encode($menu).'</div>';
	$icon = [
		"Dashboard"=>'<span class="svg-icon menu-icon">
						<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.5 11.4786V4.67861C21.5 3.17861 20.86 2.57861 19.27 2.57861H15.23C13.64 2.57861 13 3.17861 13 4.67861V11.4786C13 12.9786 13.64 13.5786 15.23 13.5786H19.27C20.86 13.5786 21.5 12.9786 21.5 11.4786Z" fill="#77818A"/>
							<path d="M11 13.6786V20.4786C11 21.9786 10.36 22.5786 8.77 22.5786H4.73C3.14 22.5786 2.5 21.9786 2.5 20.4786V13.6786C2.5 12.1786 3.14 11.5786 4.73 11.5786H8.77C10.36 11.5786 11 12.1786 11 13.6786Z" fill="#77818A"/>
							<path opacity="0.4" d="M21.5 20.4786V17.6786C21.5 16.1786 20.86 15.5786 19.27 15.5786H15.23C13.64 15.5786 13 16.1786 13 17.6786V20.4786C13 21.9786 13.64 22.5786 15.23 22.5786H19.27C20.86 22.5786 21.5 21.9786 21.5 20.4786Z" fill="#77818A"/>
							<path opacity="0.4" d="M11 7.47861V4.67861C11 3.17861 10.36 2.57861 8.77 2.57861H4.73C3.14 2.57861 2.5 3.17861 2.5 4.67861V7.47861C2.5 8.97861 3.14 9.57861 4.73 9.57861H8.77C10.36 9.57861 11 8.97861 11 7.47861Z" fill="#77818A"/>
						</svg>
					</span>',
		"Attendances"=>'<span class="svg-icon menu-icon">
						<svg width="15" height="16" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18.0959 24.5786H16.4279C15.9239 24.5786 15.5039 24.1706 15.5039 23.6546C15.5039 23.1506 15.9119 22.7306 16.4279 22.7306H18.0959C20.3399 22.7306 22.1519 20.9066 22.1519 18.6746V17.0186C22.1519 16.5146 22.5599 16.0946 23.0759 16.0946C23.5799 16.0946 23.9999 16.5026 23.9999 17.0186V18.6746C23.9999 21.9266 21.3479 24.5786 18.0959 24.5786Z" fill="#77818A"/>
							<path d="M8.676 24.5786H5.904C2.652 24.5786 0 21.9266 0 18.6746V15.9026C0 15.3866 0.408 14.9786 0.924 14.9786C1.44 14.9786 1.848 15.3866 1.848 15.9026V18.6746C1.848 20.9186 3.672 22.7306 5.904 22.7306H8.676C9.18 22.7306 9.6 23.1386 9.6 23.6546C9.6 24.1706 9.192 24.5786 8.676 24.5786Z" fill="#77818A"/>
							<path d="M19.7522 11.6547H18.1202H5.88022H4.24822C3.73222 11.6547 3.32422 12.0747 3.32422 12.5787C3.32422 13.0827 3.73222 13.5027 4.24822 13.5027H5.88022H18.1202H19.7522C20.2682 13.5027 20.6762 13.0827 20.6762 12.5787C20.6762 12.0747 20.2682 11.6547 19.7522 11.6547Z" fill="#77818A"/>
							<path d="M5.87988 14.9067V15.3027C5.87988 17.2947 7.48788 18.9027 9.47988 18.9027H14.5199C16.5119 18.9027 18.1199 17.2947 18.1199 15.3027V14.9067C18.1199 14.7627 18.0119 14.6547 17.8679 14.6547H6.13188C5.98788 14.6547 5.87988 14.7627 5.87988 14.9067Z" fill="#77818A"/>
							<path opacity="0.4" d="M0.924 10.1786C0.408 10.1786 0 9.77061 0 9.25461V6.48261C0 3.23061 2.652 0.578613 5.904 0.578613H8.676C9.192 0.578613 9.6 0.986613 9.6 1.50261C9.6 2.01861 9.192 2.42661 8.676 2.42661H5.904C3.66 2.42661 1.848 4.25061 1.848 6.48261V9.25461C1.848 9.77061 1.428 10.1786 0.924 10.1786Z" fill="#77818A"/>
							<path opacity="0.4" d="M23.0764 10.1786C22.5724 10.1786 22.1524 9.77061 22.1524 9.25461V6.48261C22.1524 4.23861 20.3284 2.42661 18.0964 2.42661H15.3244C14.8084 2.42661 14.4004 2.00661 14.4004 1.50261C14.4004 0.998613 14.8084 0.578613 15.3244 0.578613H18.0964C21.3484 0.578613 24.0004 3.23061 24.0004 6.48261V9.25461C24.0004 9.77061 23.5924 10.1786 23.0764 10.1786Z" fill="#77818A"/>
							<path opacity="0.4" d="M5.87988 10.2506V9.85464C5.87988 7.86264 7.48788 6.25464 9.47988 6.25464H14.5199C16.5119 6.25464 18.1199 7.86264 18.1199 9.85464V10.2506C18.1199 10.3946 18.0119 10.5026 17.8679 10.5026H6.13188C5.98788 10.5026 5.87988 10.3946 5.87988 10.2506Z" fill="#77818A"/>
						</svg>
					</span>',
		"Focus Product"=>'<span class="svg-icon menu-icon">
						<svg width="15" height="16" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.4" d="M12 20.5786C16.4183 20.5786 20 16.9969 20 12.5786C20 8.16034 16.4183 4.57861 12 4.57861C7.58172 4.57861 4 8.16034 4 12.5786C4 16.9969 7.58172 20.5786 12 20.5786Z" fill="#77818A"/>
							<path d="M11.9999 15.6986C13.723 15.6986 15.1199 14.3017 15.1199 12.5786C15.1199 10.8555 13.723 9.45862 11.9999 9.45862C10.2768 9.45862 8.87988 10.8555 8.87988 12.5786C8.87988 14.3017 10.2768 15.6986 11.9999 15.6986Z" fill="#77818A"/>
							<path d="M12.75 2.57861V4.61861H12.74C12.5 4.58861 12.25 4.57861 12 4.57861C11.75 4.57861 11.5 4.58861 11.26 4.61861H11.25V2.57861C11.25 2.16861 11.59 1.82861 12 1.82861C12.41 1.82861 12.75 2.16861 12.75 2.57861Z" fill="#77818A"/>
							<path d="M4 12.5786C4 12.8286 4.01 13.0886 4.04 13.3286H2C1.59 13.3286 1.25 12.9886 1.25 12.5786C1.25 12.1686 1.59 11.8286 2 11.8286H4.04C4.01 12.0686 4 12.3286 4 12.5786Z" fill="#77818A"/>
							<path d="M12.75 20.5386V22.5786C12.75 22.9886 12.41 23.3286 12 23.3286C11.59 23.3286 11.25 22.9886 11.25 22.5786V20.5386H11.26C11.5 20.5686 11.75 20.5786 12 20.5786C12.25 20.5786 12.5 20.5686 12.74 20.5386H12.75Z" fill="#77818A"/>
							<path d="M22.75 12.5786C22.75 12.9886 22.41 13.3286 22 13.3286H19.96C19.99 13.0886 20 12.8286 20 12.5786C20 12.3286 19.99 12.0686 19.96 11.8286H22C22.41 11.8286 22.75 12.1686 22.75 12.5786Z" fill="#77818A"/>
						</svg>
					</span>',
		"Sellout"=>'<span class="svg-icon menu-icon">
							<svg width="15" height="16" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22 6.57861V8.99861C22 10.5786 21 11.5786 19.42 11.5786H16V4.58861C16 3.47861 16.91 2.57861 18.02 2.57861C19.11 2.58861 20.11 3.02861 20.83 3.74861C21.55 4.47861 22 5.47861 22 6.57861Z" fill="#77818A"/>
								<path opacity="0.4" d="M2 7.57861V21.5786C2 22.4086 2.94001 22.8786 3.60001 22.3786L5.31 21.0986C5.71 20.7986 6.27 20.8386 6.63 21.1986L8.28999 22.8686C8.67999 23.2586 9.32001 23.2586 9.71001 22.8686L11.39 21.1886C11.74 20.8386 12.3 20.7986 12.69 21.0986L14.4 22.3786C15.06 22.8686 16 22.3986 16 21.5786V4.57861C16 3.47861 16.9 2.57861 18 2.57861H7H6C3 2.57861 2 4.36861 2 6.57861V7.57861Z" fill="#77818A"/>
								<path d="M12 10.3286H6C5.59 10.3286 5.25 9.98861 5.25 9.57861C5.25 9.16861 5.59 8.82861 6 8.82861H12C12.41 8.82861 12.75 9.16861 12.75 9.57861C12.75 9.98861 12.41 10.3286 12 10.3286Z" fill="#77818A"/>
								<path d="M11.25 14.3286H6.75C6.34 14.3286 6 13.9886 6 13.5786C6 13.1686 6.34 12.8286 6.75 12.8286H11.25C11.66 12.8286 12 13.1686 12 13.5786C12 13.9886 11.66 14.3286 11.25 14.3286Z" fill="#77818A"/>
							</svg>
						</span>',
		"Daily Planogram"=>'<span class="svg-icon menu-icon">
							<svg width="15" height="16" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.4" d="M21.6602 11.0186L20.6802 15.1986C19.8402 18.8086 18.1802 20.2686 15.0602 19.9686C14.5602 19.9286 14.0202 19.8386 13.4402 19.6986L11.7602 19.2986C7.59018 18.3086 6.30018 16.2486 7.28018 12.0686L8.26018 7.87862C8.46018 7.02862 8.70018 6.28862 9.00018 5.67862C10.1702 3.25862 12.1602 2.60862 15.5002 3.39862L17.1702 3.78862C21.3602 4.76862 22.6402 6.83862 21.6602 11.0186Z" fill="#77818A"/>
								<path d="M15.0603 19.9686C14.4403 20.3886 13.6603 20.7386 12.7103 21.0486L11.1303 21.5686C7.16034 22.8486 5.07034 21.7786 3.78034 17.8086L2.50034 13.8586C1.22034 9.88859 2.28034 7.78859 6.25034 6.50859L7.83034 5.98859C8.24034 5.85859 8.63034 5.74859 9.00034 5.67859C8.70034 6.28859 8.46034 7.02859 8.26034 7.87859L7.28034 12.0686C6.30034 16.2486 7.59034 18.3086 11.7603 19.2986L13.4403 19.6986C14.0203 19.8386 14.5603 19.9286 15.0603 19.9686Z" fill="#77818A"/>
								<path d="M17.4904 11.0886C17.4304 11.0886 17.3704 11.0786 17.3004 11.0686L12.4504 9.83863C12.0504 9.73863 11.8104 9.32863 11.9104 8.92863C12.0104 8.52863 12.4204 8.28863 12.8204 8.38863L17.6704 9.61863C18.0704 9.71863 18.3104 10.1286 18.2104 10.5286C18.1304 10.8586 17.8204 11.0886 17.4904 11.0886Z" fill="#77818A"/>
								<path d="M14.5601 14.4686C14.5001 14.4686 14.4401 14.4586 14.3701 14.4486L11.4601 13.7086C11.0601 13.6086 10.8201 13.1986 10.9201 12.7986C11.0201 12.3986 11.4301 12.1586 11.8301 12.2586L14.7401 12.9986C15.1401 13.0986 15.3801 13.5086 15.2801 13.9086C15.2001 14.2486 14.9001 14.4686 14.5601 14.4686Z" fill="#77818A"/>
							</svg>
						</span>',
		"Weekly Monitoring"=>'<span class="svg-icon menu-icon">
							<svg width="15" height="16" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.4" d="M21.6602 11.0186L20.6802 15.1986C19.8402 18.8086 18.1802 20.2686 15.0602 19.9686C14.5602 19.9286 14.0202 19.8386 13.4402 19.6986L11.7602 19.2986C7.59018 18.3086 6.30018 16.2486 7.28018 12.0686L8.26018 7.87862C8.46018 7.02862 8.70018 6.28862 9.00018 5.67862C10.1702 3.25862 12.1602 2.60862 15.5002 3.39862L17.1702 3.78862C21.3602 4.76862 22.6402 6.83862 21.6602 11.0186Z" fill="#77818A"/>
								<path d="M15.0603 19.9686C14.4403 20.3886 13.6603 20.7386 12.7103 21.0486L11.1303 21.5686C7.16034 22.8486 5.07034 21.7786 3.78034 17.8086L2.50034 13.8586C1.22034 9.88859 2.28034 7.78859 6.25034 6.50859L7.83034 5.98859C8.24034 5.85859 8.63034 5.74859 9.00034 5.67859C8.70034 6.28859 8.46034 7.02859 8.26034 7.87859L7.28034 12.0686C6.30034 16.2486 7.59034 18.3086 11.7603 19.2986L13.4403 19.6986C14.0203 19.8386 14.5603 19.9286 15.0603 19.9686Z" fill="#77818A"/>
								<path d="M17.4904 11.0886C17.4304 11.0886 17.3704 11.0786 17.3004 11.0686L12.4504 9.83863C12.0504 9.73863 11.8104 9.32863 11.9104 8.92863C12.0104 8.52863 12.4204 8.28863 12.8204 8.38863L17.6704 9.61863C18.0704 9.71863 18.3104 10.1286 18.2104 10.5286C18.1304 10.8586 17.8204 11.0886 17.4904 11.0886Z" fill="#77818A"/>
								<path d="M14.5601 14.4686C14.5001 14.4686 14.4401 14.4586 14.3701 14.4486L11.4601 13.7086C11.0601 13.6086 10.8201 13.1986 10.9201 12.7986C11.0201 12.3986 11.4301 12.1586 11.8301 12.2586L14.7401 12.9986C15.1401 13.0986 15.3801 13.5086 15.2801 13.9086C15.2001 14.2486 14.9001 14.4686 14.5601 14.4686Z" fill="#77818A"/>
							</svg>
						</span>',
		"Stock Gimmick"=>'<span class="svg-icon menu-icon">
							<svg width="15" height="16" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.4" d="M21.6602 11.0186L20.6802 15.1986C19.8402 18.8086 18.1802 20.2686 15.0602 19.9686C14.5602 19.9286 14.0202 19.8386 13.4402 19.6986L11.7602 19.2986C7.59018 18.3086 6.30018 16.2486 7.28018 12.0686L8.26018 7.87862C8.46018 7.02862 8.70018 6.28862 9.00018 5.67862C10.1702 3.25862 12.1602 2.60862 15.5002 3.39862L17.1702 3.78862C21.3602 4.76862 22.6402 6.83862 21.6602 11.0186Z" fill="#77818A"/>
								<path d="M15.0603 19.9686C14.4403 20.3886 13.6603 20.7386 12.7103 21.0486L11.1303 21.5686C7.16034 22.8486 5.07034 21.7786 3.78034 17.8086L2.50034 13.8586C1.22034 9.88859 2.28034 7.78859 6.25034 6.50859L7.83034 5.98859C8.24034 5.85859 8.63034 5.74859 9.00034 5.67859C8.70034 6.28859 8.46034 7.02859 8.26034 7.87859L7.28034 12.0686C6.30034 16.2486 7.59034 18.3086 11.7603 19.2986L13.4403 19.6986C14.0203 19.8386 14.5603 19.9286 15.0603 19.9686Z" fill="#77818A"/>
								<path d="M17.4904 11.0886C17.4304 11.0886 17.3704 11.0786 17.3004 11.0686L12.4504 9.83863C12.0504 9.73863 11.8104 9.32863 11.9104 8.92863C12.0104 8.52863 12.4204 8.28863 12.8204 8.38863L17.6704 9.61863C18.0704 9.71863 18.3104 10.1286 18.2104 10.5286C18.1304 10.8586 17.8204 11.0886 17.4904 11.0886Z" fill="#77818A"/>
								<path d="M14.5601 14.4686C14.5001 14.4686 14.4401 14.4586 14.3701 14.4486L11.4601 13.7086C11.0601 13.6086 10.8201 13.1986 10.9201 12.7986C11.0201 12.3986 11.4301 12.1586 11.8301 12.2586L14.7401 12.9986C15.1401 13.0986 15.3801 13.5086 15.2801 13.9086C15.2001 14.2486 14.9001 14.4686 14.5601 14.4686Z" fill="#77818A"/>
							</svg>
						</span>',
		"Master Data"=>'<span class="svg-icon menu-icon svg-icon-2x">
							<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.4" d="M16.24 4.22864H7.76004C5.29004 4.22864 3.29004 6.23864 3.29004 8.69864V18.1086C3.29004 20.5686 5.30004 22.5786 7.76004 22.5786H16.23C18.7 22.5786 20.7 20.5686 20.7 18.1086V8.69864C20.71 6.22864 18.7 4.22864 16.24 4.22864Z" fill="#77818A"/>
								<path d="M14.3498 2.57861H9.64977C8.60977 2.57861 7.75977 3.41861 7.75977 4.45861V5.39861C7.75977 6.43861 8.59977 7.27861 9.63977 7.27861H14.3498C15.3898 7.27861 16.2298 6.43861 16.2298 5.39861V4.45861C16.2398 3.41861 15.3898 2.57861 14.3498 2.57861Z" fill="#77818A"/>
								<path d="M15 13.5286H8C7.59 13.5286 7.25 13.1886 7.25 12.7786C7.25 12.3686 7.59 12.0286 8 12.0286H15C15.41 12.0286 15.75 12.3686 15.75 12.7786C15.75 13.1886 15.41 13.5286 15 13.5286Z" fill="#77818A"/>
								<path d="M12.38 17.5286H8C7.59 17.5286 7.25 17.1886 7.25 16.7786C7.25 16.3686 7.59 16.0286 8 16.0286H12.38C12.79 16.0286 13.13 16.3686 13.13 16.7786C13.13 17.1886 12.79 17.5286 12.38 17.5286Z" fill="#77818A"/>
							</svg>
						</span>',
		"SPV Area"=>'<span class="svg-icon menu-icon svg-icon-2x">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24"></rect>
									<rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6" rx="1.5"></rect>
									<rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5"></rect>
								</g>
							</svg>
					</span>',
		"Config"=>'<span class="svg-icon menu-icon svg-icon-2x">
						<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.4" d="M2 13.4586V11.6986C2 10.6586 2.85 9.79861 3.9 9.79861C5.71 9.79861 6.45 8.51861 5.54 6.94861C5.02 6.04861 5.33 4.87861 6.24 4.35861L7.97 3.36861C8.76 2.89861 9.78 3.17861 10.25 3.96861L10.36 4.15861C11.26 5.72861 12.74 5.72861 13.65 4.15861L13.76 3.96861C14.23 3.17861 15.25 2.89861 16.04 3.36861L17.77 4.35861C18.68 4.87861 18.99 6.04861 18.47 6.94861C17.56 8.51861 18.3 9.79861 20.11 9.79861C21.15 9.79861 22.01 10.6486 22.01 11.6986V13.4586C22.01 14.4986 21.16 15.3586 20.11 15.3586C18.3 15.3586 17.56 16.6386 18.47 18.2086C18.99 19.1186 18.68 20.2786 17.77 20.7986L16.04 21.7886C15.25 22.2586 14.23 21.9786 13.76 21.1886L13.65 20.9986C12.75 19.4286 11.27 19.4286 10.36 20.9986L10.25 21.1886C9.78 21.9786 8.76 22.2586 7.97 21.7886L6.24 20.7986C5.33 20.2786 5.02 19.1086 5.54 18.2086C6.45 16.6386 5.71 15.3586 3.9 15.3586C2.85 15.3586 2 14.4986 2 13.4586Z" fill="#77818A"/>
							<path d="M12 15.8286C13.7949 15.8286 15.25 14.3735 15.25 12.5786C15.25 10.7837 13.7949 9.32861 12 9.32861C10.2051 9.32861 8.75 10.7837 8.75 12.5786C8.75 14.3735 10.2051 15.8286 12 15.8286Z" fill="#77818A"/>
						</svg>
					</span>',
		"Form Setup"=>'<span class="svg-icon menu-icon svg-icon-2x">
						<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path opacity="0.4" d="M2 13.4586V11.6986C2 10.6586 2.85 9.79861 3.9 9.79861C5.71 9.79861 6.45 8.51861 5.54 6.94861C5.02 6.04861 5.33 4.87861 6.24 4.35861L7.97 3.36861C8.76 2.89861 9.78 3.17861 10.25 3.96861L10.36 4.15861C11.26 5.72861 12.74 5.72861 13.65 4.15861L13.76 3.96861C14.23 3.17861 15.25 2.89861 16.04 3.36861L17.77 4.35861C18.68 4.87861 18.99 6.04861 18.47 6.94861C17.56 8.51861 18.3 9.79861 20.11 9.79861C21.15 9.79861 22.01 10.6486 22.01 11.6986V13.4586C22.01 14.4986 21.16 15.3586 20.11 15.3586C18.3 15.3586 17.56 16.6386 18.47 18.2086C18.99 19.1186 18.68 20.2786 17.77 20.7986L16.04 21.7886C15.25 22.2586 14.23 21.9786 13.76 21.1886L13.65 20.9986C12.75 19.4286 11.27 19.4286 10.36 20.9986L10.25 21.1886C9.78 21.9786 8.76 22.2586 7.97 21.7886L6.24 20.7986C5.33 20.2786 5.02 19.1086 5.54 18.2086C6.45 16.6386 5.71 15.3586 3.9 15.3586C2.85 15.3586 2 14.4986 2 13.4586Z" fill="#77818A"/>
							<path d="M12 15.8286C13.7949 15.8286 15.25 14.3735 15.25 12.5786C15.25 10.7837 13.7949 9.32861 12 9.32861C10.2051 9.32861 8.75 10.7837 8.75 12.5786C8.75 14.3735 10.2051 15.8286 12 15.8286Z" fill="#77818A"/>
						</svg>
					</span>',
	];
@endphp
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
	<div class="brand flex-column-auto" id="kt_brand">
		<a href="index.html" class="brand-logo btn bg-white text-center custom-brand-logo">
			<img alt="Logo" src="{{asset('media/logos/dark-logo2.png')}}" />
		</a>
		<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
			<span class="svg-icon svg-icon svg-icon-xl">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
						<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
					</g>
				</svg>
			</span>
		</button>
	</div>
	<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
		<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
			<ul class="menu-nav">
				<li class="menu-section">
				</li>
				@foreach($menu as $keyMenu => $valueMenu)
					@foreach($valueMenu as $key => $value)
						@php
							$header_name = "";
						@endphp
						@if($key == "MN")
							@foreach($value as $key2 => $value2)
								<li class="menu-item" menu="{{$value2->nama_route}}" aria-haspopup="true">
									<a href="{{route($value2->nama_route)}}" class="menu-link">
										{!! $icon[$value2->nama_halaman] !!}
										<span class="menu-text">{{$value2->nama_halaman}}</span>
									</a>
								</li>
							@endforeach
						@else
							@if($key == "ATTENDANCE")
								@php
									$header_name = "Attendances";
								@endphp
							@elseif($key == "PLANOGRAM")
								@php
									$header_name = "Daily Planogram";
								@endphp
							@elseif($key == "MSTR")
								@php
									$header_name = "Master Data";
								@endphp
							@elseif($key == "CNFG")
								@php
									$header_name = "Config";
								@endphp
							@endif
							<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
								<a href="javascript:;" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">	
										{!! $icon[$header_name] !!}
									</span>
									<span class="menu-text">{{$header_name}}</span>
									<i class="menu-arrow"></i>
								</a>
								<div class="menu-submenu" kt-hidden-height="80">
									<i class="menu-arrow"></i>
									<ul class="menu-subnav">
										<li class="menu-item menu-item-parent" aria-haspopup="true">
											<span class="menu-link">
												<span class="menu-text">{{$header_name}}</span>
											</span>
										</li>
										@foreach($value as $key2 => $value2)
											<li class="menu-item" menu="{{$value2->nama_route}}" aria-haspopup="true">
												<a href="{{route($value2->nama_route)}}" class="menu-link">
													<i class="menu-bullet menu-bullet-dot">
														<span></span>
													</i>
													<span class="menu-text">{{$value2->nama_halaman}}</span>
												</a>
											</li>
										@endforeach
									</ul>
								</div>
							</li>
						@endif
					@endforeach
				@endforeach
			</ul>
		</div>
	</div>
</div>