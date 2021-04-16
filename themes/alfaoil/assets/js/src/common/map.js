document.addEventListener('DOMContentLoaded', initPageScript);
function initPageScript() {
    let mapContainer = document.querySelector('.map-container');
    let mapAzs = document.querySelector('.map-azs');
    let mapTitle = document.createElement('div');

    if(mapContainer) {
        mapTitle.className = 'mapTitle';
        mapAzs.style.pointerEvents = 'none';
        mapTitle.textContent = 'Для активации карты нажмите по ней';
        mapContainer.appendChild(mapTitle);

        //кликаем по карте
        mapContainer.addEventListener('click', function() {
            this.children[0].removeAttribute('style');
            mapTitle.parentElement.removeChild(mapTitle);
        })

        //окно с сообщением рядом с курсором
        mapContainer.addEventListener('mousemove', function(event) {
            mapTitle.style.display = 'block';
            if(event.offsetY > 10) mapTitle.style.top = event.offsetY + 20 + 'px';
            if(event.offsetX > 10) mapTitle.style.left = event.offsetX + 20 + 'px';
        })

        function leaveFromMap() {
            mapTitle.style.display = 'none';
            mapAzs.style.pointerEvents = 'none';
            mapContainer.appendChild(mapTitle);
        }

        mapContainer.addEventListener('mouseleave', leaveFromMap);
    }
}
