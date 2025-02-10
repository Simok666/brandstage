// var laravelCsrf = $('meta[name="csrf-token"]').attr('content');
// var baseUrl = window.location.origin + "/kms/public";
var baseUrl = window.location.origin;



var req = {
    page:1
};

const menuByRole = {
    "admin" : [
        "sections-dashboard", 
        "sections-navbarSection", 
        "sections-privacy", 
        "sections-terms", 
        "sections-brandsHero", 
        "sections-brandsSecondSection",
        "sections-brandsThirdSection",
        "sections-brandsFourthSection",
        "sections-brandsFifthSection",
        "sections-brandsSixthSection",
        "sections-spacesHero",
        "sections-spacesSecondSection",
        "sections-spacesThirdSection",
        "sections-spacesFourthSection",
        "sections-spacesFifthSection",
        "sections-aboutHero",
        "sections-aboutSecondSection",
        "sections-aboutThirdSection",
        "sections-aboutFourthSection",
        "sections-insight",
        "sections-homeHero",
        "sections-homeSecondSection",
        "sections-homeThirdSection",
        "sections-homeFourthSection",
        "sections-homeFifthSection",
    ],
}

const sidebarItems = [
    {
      url: "sections-dashboard",
      icon: "bi bi-grid-fill",
      label: "Dashboard"
    },
    {
      url: "sections-navbarSection",
      icon: "bi bi-people-fill",
      label: "Navbar Section Edit"
    },
    {
        url: "sections-privacy",
        icon: "bi bi-people-fill",
        label: "Privacy Page Edit"
    },
    {
        url: "sections-terms",
        icon: "bi bi-people-fill",
        label: "Terms Page Edit"
    },
    {
        url: "sections-brandsHero",
        icon: "bi bi-people-fill",
        label: "Brands-Hero Page Edit"
    },
    {
        url: "sections-brandsSecondSection",
        icon: "bi bi-people-fill",
        label: "Brands-Second-Section Page Edit"
    },
    {
        url: "sections-brandsThirdSection",
        icon: "bi bi-people-fill",
        label: "Brands-Third-Section Page Edit"
    },
    {
        url: "sections-brandsFourthSection",
        icon: "bi bi-people-fill",
        label: "Brands-Fourth-Section Page Edit"
    },
    {
        url: "sections-brandsFifthSection",
        icon: "bi bi-people-fill",
        label: "Brands-Fifth-Section Page Edit"
    },
    {
        url: "sections-brandsSixthSection",
        icon: "bi bi-people-fill",
        label: "Brands-Sixth-Section Page Edit"
    },
    {
        url: "sections-spacesHero",
        icon: "bi bi-people-fill",
        label: "Spaces-Hero-Section Page Edit"
    },
    {
        url: "sections-spacesSecondSection",
        icon: "bi bi-people-fill",
        label: "Spaces-Second-Section Page Edit"
    },
    {
        url: "sections-spacesThirdSection",
        icon: "bi bi-people-fill",
        label: "Spaces-Third-Section Page Edit"
    },
    {
        url: "sections-spacesFourthSection",
        icon: "bi bi-people-fill",
        label: "Spaces-Fourth-Section Page Edit"
    },
    {
        url: "sections-spacesFifthSection",
        icon: "bi bi-people-fill",
        label: "Spaces-Fifth-Section Page Edit"
    },
    {
        url: "sections-aboutHero",
        icon: "bi bi-people-fill",
        label: "About-Hero-Section Page Edit"
    },
    {
        url: "sections-aboutSecondSection",
        icon: "bi bi-people-fill",
        label: "About-Second-Section Page Edit"
    },
    {
        url: "sections-aboutThirdSection",
        icon: "bi bi-people-fill",
        label: "About-Third-Section Page Edit"
    },
    {
        url: "sections-aboutFourthSection",
        icon: "bi bi-people-fill",
        label: "About-Fourth-Section Page Edit"
    },
    {
        url: "sections-insight",
        icon: "bi bi-people-fill",
        label: "Insight-Section Page Edit"
    },
    {
        url: "sections-homeHero",
        icon: "bi bi-people-fill",
        label: "Home-Hero Page Edit"
    },
    {
        url: "sections-homeSecondSection",
        icon: "bi bi-people-fill",
        label: "Home-Second-Section Page Edit"
    },
    {
        url: "sections-homeThirdSection",
        icon: "bi bi-people-fill",
        label: "Home-Third-Section Page Edit"
    },
    {
        url: "sections-homeFourthSection",
        icon: "bi bi-people-fill",
        label: "Home-Fourth-Section Page Edit"
    },
    {
        url: "sections-homeFifthSection",
        icon: "bi bi-people-fill",
        label: "Home-Fifth-Section Page Edit"
    },
    
];

function getCsrfToken() {
    return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || 
           document.querySelector('meta[name="csrf_token"]')?.getAttribute('content') || 
           '';
}

console.log("toke", getCsrfToken());

// Set up AJAX defaults
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': getCsrfToken(),
        'Authorization': 'Bearer ' + session("token")
    }
})

function ajaxData(url, type, data , successFunc = "", errorFunc = "") {
    return $.ajax({
        url: url,
        type: type,
        dataType:"JSON",
        data: data,
        success: function (resp) {
            if(!empty(successFunc)) {
                successFunc(resp);
            }
        },
        error: function (data) {
            let code = data.responseJSON?.code;
            if (code >= 500) toast("Something went wrong, please try again", 'danger');
            else toast(data.responseJSON?.message ?? data.responseJSON?.error, 'warning')
            if(typeof errorFunc === "function") {
                errorFunc(data);
            }
        }
    });
}

function ajaxDataFile(url, type, data , successFunc = "", errorFunc = "") {
    return $.ajax({
        url: url,
        type: type,
        dataType:"JSON",
        data: data,
        cache: false,
        processData: false,
        contentType: false,
        success: function (resp) {
            if(!empty(successFunc)) {
                successFunc(resp);
            }
        },
        error: function (data) {
            let code = data.responseJSON.code;
            if (code >= 500) toast("Something went wrong, please try again", 'danger');
            else toast(data.responseJSON.message ?? data.responseJSON.error, 'warning')
            if(typeof errorFunc === "function") {
                errorFunc(data);
            }
        }
    });
}

function toast(message, type = "success") {
    switch(type) {
        case 'primary': type = '#435ebe'; break;
        case 'secondary': type = '#6c757d'; break;
        case 'success': type = '#198754'; break;
        case 'danger': type = '#dc3545'; break;
        case 'warning': type = '#ffc107'; break;
        case 'info': type = '#0dcaf0'; break;
        default: type = '#6c757d';
    }

    if (empty(message)) {
        return;
    }

    Toastify({
        text: message,
        duration: 3000,
        close:true,
        backgroundColor: type,
    }).showToast();
}

function empty(value) {
    // empty array
    return (value === undefined || value === null || value.length === 0 || value === "") ? true : false;
}

function setSession(name, value) {
    localStorage.setItem(name, value);
}
function session(name) {
    return localStorage.getItem(name) ?? "";
}

function checkLogin() {
    if(empty(session("isLogin"))) {
        toast("Session expired, please login again", 'danger');
        setTimeout(function(){
            deleteSession();
        }, 300);
    } else {
        ajaxData(baseUrl + '/api/v1/user', 'POST', {}, function (resp) {
            $(".display-user-name").html(resp.data.name);
            let role = (resp.data.role == "user" ? "user" : resp.data.role); ;
            $(".display-user-role").html(role);
            setSession("role", resp.data.role);
            if (role == "user") {
                let isVerificator = resp.data.dataRole.find((element) => element.nama_role == "Knowledge Verificator");
                let isContributor = resp.data.dataRole.find((element) => element.nama_role == "Knowledge Contributor");
                setSession("id", resp.data.id);

                if (typeof isVerificator === 'object') {
                    if (Object.keys(isVerificator).length === 0) {
                        setSession("data-role-verificator", "tidak");
                    } else {
                        setSession("data-role-verificator", "ada");
                    }
                } else {
                 setSession("data-role-verificator", "tidak");
                }
                
                if (typeof isContributor === 'object') {
                    if (Object.keys(isContributor).length === 0) {
                        setSession("data-role-contributor", "tidak");
                    } else {
                        setSession("data-role-contributor", "ada");
                    }
                } else {
                setSession("data-role-contributor", "tidak");
 
                }

            } else {
                setSession("data-role-verificator", "tidak");
                setSession("data-role-contributor", "tidak");
            }
            setSession("is_upload_google_form", resp.data.is_upload_google_form);
            checkUserAccess()
            setMenuByRole();
            checkSpecialAction(resp.data)
        }, function(data) {
            toast(data.responseJSON.message ?? data.responseJSON.error, 'warning');
            setTimeout(deleteSession, 300);
        });
    }
}

function checkLoginHome() {
    $(".logout-home").hide();
    if(empty(session("isLogin"))) {
        $(".logout-home").hide();
    } else {
        ajaxData(baseUrl + '/api/v1/user', 'POST', {}, function (resp) {
        
            $(".login-home").hide();
            $(".logout-home").show();
            let role = (resp.data.role == "user" ? "user" : resp.data.role); ;
            
            setSession("role", resp.data.role);
            setSession("userId", resp.data.id);

            if (role == "user") {
                let isVerificator = resp.data.dataRole.find((element) => element.nama_role == "Knowledge Verificator");
                setSession("id", resp.data.id);
                if (typeof isVerificator === 'object') {
                    if (Object.keys(isVerificator).length === 0) {
                        setSession("data-role-seeker", "tidak");
                    } else {
                        setSession("data-role-seeker", "ada");
                    }
                } else {
                 setSession("data-role-verificator", "tidak");
                }
            } else {
                setSession("data-role-seeker", "tidak");
            }

            checkSpecialAction(resp.data)
        }, function(data) {
            toast(data.responseJSON.message ?? data.responseJSON.error, 'warning');
            setTimeout(deleteSession, 300);
        });
    }
}

function checkUserAccess(){
    const role = session("role");
    let accessMenu = [];
    
    if(role === "user") {
        ajaxData(baseUrl + '/api/v1/getRoles', 'POST', {}, function (resp) {
            const userRoles = resp.data;
            
            userRoles.forEach( userRole => {
                const roleMenu = menuByRole['user'][userRole.nama_role] || [];
                accessMenu = accessMenu.concat(roleMenu); 
            })

            accessMenu = accessMenu.filter(item => {
                let pathname = window.location.pathname.replace(/\.html$/, '').replace(/[/]/g, '');
                pathname = pathname.replace(/^kmspublic/, '');
                let menuUrl = item.replace(/_/g, '-');
                if (item == "*") return true;
                return pathname == menuUrl
            }); 

            if (empty(accessMenu)) {
                toast("Access Denied", 'danger');
                setTimeout(function(){
                    // redirect to login
                    window.location = baseUrl + '/auth-login.html';
                }, 300);
            }
            
        }, function(data) {
            toast(data.responseJSON.message ?? data.responseJSON.error, 'warning');
            setTimeout(deleteSession, 300);
        });
    } else {
        accessMenu = menuByRole[`${role}`].filter(item => {
            let pathname = window.location.pathname.replace(/\.html$/, '').replace(/[/]/g, '');
            pathname = pathname.replace(/^kmspublic/, '');
            let menuUrl = item.replace(/_/g, '-');
            if (item == "*") return true;
            return pathname == menuUrl
        });    

        if (empty(accessMenu)) {
            toast("Access Denied", 'danger');
            setTimeout(function(){
                // redirect to login
                window.location = baseUrl + '/auth-login.html';
            }, 300);
        }
    }
    
}

function fetchKategoriData(id) {
    const url = baseUrl + `/api/v1/getContent/${id}`;
    
    $.ajax({
        url: url, 
        type: 'GET',
        success: function(response) {
            console.log(response);
        },
        error: function(xhr) {
            console.log('Error:', xhr.responseText);
        }
    });
}

function setMenuByRole(){
    const role = session("role");

    if(role == 'user') {
        ajaxData(baseUrl + '/api/v1/getRoles', 'POST', {}, function (resp) {
            const userRoles = resp.data 
            
            userRoles.forEach(userRole => {
                const menu = menuByRole[role][userRole.nama_role];
                const sidebarMenu = sidebarItems.filter(item => {
                    let menuUrl = item.url.replace(/_/g, '-');
                    return menu.includes(menuUrl)
                });

                sidebarMenu.forEach(function(item){
                    let menuItem = `
                    <li class="sidebar-item  ">
                        <a href="${item.url}.html" class='sidebar-link'>
                            <i class="bi ${item.icon}"></i>
                            <span>${item.label}</span>
                        </a>
                    </li>
                    
                                    
                    `
                    $(".sidebar-menu .menu").append(menuItem);
                });
                
                $(".sidebar-menu .menu .sidebar-item").each(function(index, menu){
                    let pathname = window.location.pathname.replace(/[/-]/g, '');
                    pathname = pathname.replace(/^kmspublic/, '');
                    let urlSidebar = $(this).find("a").attr("href").replace(/[/-]/g, '');
                    const hrefRegex = new RegExp(`^${urlSidebar.replace(/\//g, '')}$`);
                    if(hrefRegex.test(pathname)){
                        $(this).addClass("active");
                    }
                });
            })

            
        }, function(data) {
            toast(data.responseJSON.message ?? data.responseJSON.error, 'warning');
            setTimeout(deleteSession, 300);
        });
    } else {
        const menu = menuByRole[role];
        const sidebarMenu = sidebarItems.filter(item => {
            let menuUrl = item.url.replace(/_/g, '-');
            return menu.includes(menuUrl)
        });
        
        // add list menu
        sidebarMenu.forEach(function(item){
            let menuItem = `
            <li class="sidebar-item  ">
                <a href="${item.url}.html" class='sidebar-link'>
                    <i class="bi ${item.icon}"></i>
                    <span>${item.label}</span>
                </a>
            </li>
            
                            
            `
            $(".sidebar-menu .menu").append(menuItem);
        });

    //     <li class="sidebar-item has-sub">
    //     <a class="sidebar-link" href="#" >
    //         <i class="bi bi-stack"> 
    //         </i>
    //     <span>Components</span>                    
    //     </a>
    //     <ul class="submenu submenu-closed">
    //         <li class="submenu-item"> Tester</li>
    //     </ul>
    // </li>

        // active menu
        $(".sidebar-menu .menu .sidebar-item").each(function(index, menu){
            let pathname = window.location.pathname.replace(/[/-]/g, '');
            pathname = pathname.replace(/^kmspublic/, '');
            let urlSidebar = $(this).find("a").attr("href").replace(/[/-]/g, '');
            const hrefRegex = new RegExp(`^${urlSidebar.replace(/\//g, '')}$`);
            if(hrefRegex.test(pathname)){
                $(this).addClass("active");
            }
        });
    }
    
}

function checkSpecialAction(resp) {
    const { host, hostname, href, origin, pathname, port, protocol, search } = window.location
    if (resp.role == "user") {        
        const pageMapping = {
            0: 'profile-perpustakaan',
            1: 'profile-komponent',
            2: 'profile-buktifisik'
        };
          
        const pattern = new RegExp('\\b(' + Object.values(pageMapping).join('|') + ')\\b', 'i');
        const isWordIncluded = pattern.test(pathname);
        const filename = pathname.split('/').pop();
        // if ((isWordIncluded && parseInt(resp.type_insert) in pageMapping) || parseInt(resp.type_insert) < 3) {
        //     const patternSamePage = new RegExp('\\b(' + pageMapping[resp.type_insert] + ')\\b', 'i');
        //     console.log(patternSamePage.test(filename))
        //     if (patternSamePage.test(filename)) {
        //         return;
        //     }
        //     window.location = `${baseUrl}/${pageMapping[parseInt(resp.type_insert)]}.html`;
        // } else if (isWordIncluded && parseInt(resp.type_insert) >= 3) {
        //     window.location = `${baseUrl}/dashboard.html`;
        // } else {
        //     let a = $(".sidebar-menu .menu").find("a[href='profile-perpustakaan.html']").parent().remove();
        //     console.log(a);
        // };         
    } else if (resp.role == "admin") {
        
    } else if (resp.role == "superadmin") {

    } // etc

    // const { pathname } = window.location;
    // const roleMapping = {
    //     "user": {
    //         0: 'profile-perpustakaan',
    //         1: 'profile-komponent',
    //         2: 'profile-buktifisik'
    //     },
    //     "admin": {},
    //     "superadmin": {}
    // };
    // const pageMapping = roleMapping[resp.role] || {};
    // const filename = pathname.split('/').pop();
    // const redirectPage = pageMapping[resp.type_insert] || (resp.type_insert >= 3 ? 'dashboard.html' : null);
    // if(redirectPage && pathname.indexOf(pageMapping[resp.type_insert]) === -1){
    //     window.location = `${baseUrl}/${redirectPage}`;
    // }
}

function deleteSession() {
    localStorage.removeItem("data-role-contributor");
    localStorage.removeItem("data-role-verificator");
    localStorage.removeItem("role");
    localStorage.removeItem("isLogin");
    localStorage.removeItem("token");
    window.location = baseUrl + '/auth-login.html';
}

function deleteSessionHome() {
    localStorage.removeItem("isLogin");
    localStorage.removeItem("role");
    localStorage.removeItem("userId");
    localStorage.removeItem("data-role-seeker");
    localStorage.removeItem("token");
    window.location = baseUrl + '/user-home.html';
}


function GetData(req , table, formatFunc = "" ,successfunc = "") {
    req = (typeof req !== 'undefined') ?  req : "";
    successfunc = (typeof successfunc !== 'undefined') ?  successfunc : "";
    url = $(`.datatable-${table}`).data("action");
    // add loading on table use font awesome reolad 
    $(`.datatable-${table} tbody`).html(`<tr><td colspan='10' class='text-center'><div class="spinner-border text-primary" role="status"></div></td></tr>`);
    $.ajax({
        type: "GET",
        url: baseUrl + url,
        data: req,
        dataType: "JSON",
        tryCount: 0,
        retryLimit: 3,
        success: function(resp){
            resp.lsdt = "";
            if(!empty(resp.meta)) {
                if(typeof formatFunc !== "function") {
                    return;
                }
                resp.lsdt = formatFunc(resp.data);
                $(".datatable-"+table+" tbody").html(resp.lsdt);
                pagination(resp.meta, table);
                if(successfunc != "") {
                    getfunc = successfunc;
                    successfunc(resp);
                }
            } else {
                if(typeof formatFunc !== "function") {
                    return;
                }
                resp.lsdt = formatFunc(resp.data);
                $(".datatable-"+table+" tbody").html(resp.lsdt);
                $(".pagination-setting-"+table).addClass("hidden");
                if(successfunc != "") {
                    getfunc = successfunc;
                    successfunc(resp);
                }
            }
        },
        error: function(xhr, textstatus, errorthrown) {
            $(".datatable-"+table+" tbody").html("<tr><td colspan='10' class='text-center'><span class='label label-warning'>Periksa koneksi internet anda kembali</span></td></tr>");
            $(".pagenation-setting-"+table).addClass("hidden");
        }
    });
}
function pagination(page, table) {
    var paginglayout = $(".pagination-setting-"+table);
    let stringInfo = `${page.from} - ${page.to} of ${page.total} Records`;
    if (empty(page.from)) {
        stringInfo = "";
    }
    var infopage = stringInfo + " | total " + page.last_page + " Pages";
    page.IsNext = page.current_page < page.last_page;
    page.IsPrev = page.current_page > 1;

    paginglayout.attr("page", page.current_page);
    paginglayout.attr("lastpage", page.last_page);
    paginglayout.removeClass("hidden");
    paginglayout.find("input[type='text']").val(Number(page.current_page));
    paginglayout.find(".pagination-info").html(infopage);
    if(page.IsNext == true) {
        paginglayout.find(".btn-next, .next-head").removeClass("disabled");
        paginglayout.find(".btn-last").removeClass("disabled");
        paginglayout.find(".btn-last").attr("lastpage", page.JmlHalTotal);
        datanext = (Number(page.current_page) + 1);
    } else {
        paginglayout.find(".btn-next, .next-head").addClass("disabled");
        paginglayout.find(".btn-last").addClass("disabled");
        dataprev = 0;
    }
    if(page.IsPrev == true) {
        paginglayout.find(".btn-prev, .prev-head").removeClass("disabled");
        paginglayout.find(".btn-first").removeClass("disabled");
        dataprev = (Number(page.current_page) - 1);
    } else {
        paginglayout.find(".btn-prev, .prev-head").addClass("disabled");
        paginglayout.find(".btn-first").addClass("disabled");
        dataprev = 0;
    }
}

$(".btn-next").click(function() {
    let page = parseInt($(this).parent().parent().parent().attr("page"));
    let table = $(this).parent().parent().parent().attr("class");
    table = table.replace(/pagination-setting-/g, "", table);
    req.page  =  page + 1;
    GetData(req, table, eval(`format${table}`));
});

$(".btn-prev").click(function() {
    let page = parseInt($(this).parent().parent().parent().attr("page"));
    let table = $(this).parent().parent().parent().attr("class");
    table = table.replace(/pagination-setting-/g, "", table);
    req.page  =  page - 1;
    GetData(req, table, eval(`format${table}`));
});

$(".btn-first").click(function() {
    let table = $(this).parent().parent().parent().attr("class");
    table = table.replace(/pagination-setting-/g, "", table);
    req.page  = 1;
    GetData(req, table, eval(`format${table}`));
});
$(".btn-last").click(function() {
    let table = $(this).parent().parent().parent().attr("class");
    table = table.replace(/pagination-setting-/g, "", table);
    req.page = $(this).parent().parent().parent().attr('lastpage');
    GetData(req, table, eval(`format${table}`));
});

$(".goto").on("submit",function(e) {
    e.preventDefault();
    let table = $(this).parent().parent().parent().attr("class");
    table = table.replace(/pagination-setting-/g, "", table);
    req.page = parseInt($(this).find("input").val()) ? parseInt($(this).find("input").val()) : 1;
    GetData(req, table, eval(`format${table}`));
    return false;
});

function loading(selector, isLoading = true) {
    if(isLoading == true) {
        selector.find(".after-loading").addClass("d-none");
        selector.find(".loading").removeClass("d-none");
    } else {
        selector.find(".after-loading").removeClass("d-none");
        selector.find(".loading").addClass("d-none");
    }
}

function loadingButton (formSubmit, isLoading = true) {
    btnSubmit = $(`form[id=${formSubmit.attr("id")}] [type='submit'],button[form=${formSubmit.attr("id")}]`);
    let spiner = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`;
    if(isLoading === true) {
        let title = btnSubmit.html();
        btnSubmit.attr("title", title);
        btnSubmit.prop("disabled", true);
        btnSubmit.html(spiner);
    } else {
        btnSubmit.prop("disabled", false)
        btnSubmit.html(btnSubmit.attr("title"));
    }
}

// function 

function  CustomloadingButton (selector, isLoading = true) {
    let btnSubmit = selector;
    let spiner = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`;
    if(isLoading === true) {
        let title = btnSubmit.html();
        btnSubmit.attr("title", title);
        btnSubmit.prop("disabled", true);
        btnSubmit.html(spiner);
    } else {
        btnSubmit.prop("disabled", false)
        btnSubmit.html(btnSubmit.attr("title"));
        btnSubmit.removeAttr("title")
    }
}