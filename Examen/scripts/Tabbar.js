function openTab(evt, cityName) {
    var i, TabContent, Tabs;
    TabContent = document.getElementsByClassName("TabContent");
    for (i = 0; i < TabContent.length; i++) {
        TabContent[i].style.display = "none";
    }
    // hide Content of All Tabs

    Tabs = document.getElementsByClassName("Tab");
    for (i = 0; i < Tabs.length; i++) {
        Tabs[i].className = Tabs[i].className.replace(
            " bg-primary",
            " bg-secondary",
        );
    }
    //Deactivate all Tab

    document.getElementById(cityName).style.display = "grid";
    evt.currentTarget.className = evt.currentTarget.className.replace(
        " bg-secondary",
        " bg-primary",
    );
}
