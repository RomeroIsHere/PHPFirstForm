let SideBarState=false;
let SideBarId="sidebar-multi-level-sidebar"
let SidebarObject=document.getElementById(SideBarId);
function toggleSideBar(){
// sidebar-multi-level-sidebar
    SideBarState=!SideBarState
    console.log(SideBarState)
    if(SideBarState){
        SidebarObject.style.width = "64";
        // SidebarObject.style.visibility="hidden"
        
    }else{
        SidebarObject.style.width = "0";
        // SidebarObject.style.visibility="visible"
    }
}