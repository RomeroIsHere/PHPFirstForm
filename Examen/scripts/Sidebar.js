let SideBarState = false;
let SideBarId = "sidebar-multi-level-sidebar";
let SidebarObject = document.getElementById(SideBarId);
function toggleSideBar() {
    // sidebar-multi-level-sidebar
    SidebarObject.style.display = "Block";
}

function closeSideBar() {
    SidebarObject.style.display = "none";
}
