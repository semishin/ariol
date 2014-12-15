<h1 class="section-title-h">Контакты</h1> МОСКВА, БОЛЬШОЙ САВВИНСКИЙ ПЕРЕУЛОК Д.12/18 <script type="text/javascript">
function BX_SetPlacemarks_MAP_RYV6uOosp3(map)
{
	var arObjects = {PLACEMARKS:[],POLYLINES:[]};
	arObjects.PLACEMARKS[arObjects.PLACEMARKS.length] = BX_YMapAddPlacemark(map, {'LON':'37.564620953642','LAT':'55.732525464285','TEXT':'Ё-Finance'});
}
</script>
<div class="bx-yandex-view-layout border-green">
	<div class="bx-yandex-view-map">
<script type="text/javascript">
if (!window.GLOBAL_arMapObjects)
	window.GLOBAL_arMapObjects = {};

function init_MAP_RYV6uOosp3()
{
	if (!window.ymaps)
		return;

	var node = BX("BX_YMAP_MAP_RYV6uOosp3");
	node.innerHTML = '';

	var map = window.GLOBAL_arMapObjects['MAP_RYV6uOosp3'] = new ymaps.Map(node, {
		center: [55.734742716631, 37.564716623197],
		zoom: 12,
		type: 'yandex#map'
	});

	map.behaviors.enable("scrollZoom");
	map.behaviors.enable("dblClickZoom");
	map.behaviors.enable("drag");
	if (map.behaviors.isEnabled("rightMouseButtonMagnifier"))
		map.behaviors.disable("rightMouseButtonMagnifier");
	map.controls.add('zoomControl');
	map.controls.add('typeSelector');
	map.controls.add('scaleLine');
	if (window.BX_SetPlacemarks_MAP_RYV6uOosp3)
	{
		window.BX_SetPlacemarks_MAP_RYV6uOosp3(map);
	}
}
	ymaps.ready(init_MAP_RYV6uOosp3);

/* if map inits in hidden block (display:none)
*  after the block showed
*  for properly showing map this function must be called
*/
function BXMapYandexAfterShow(mapId)
{
	if(window.GLOBAL_arMapObjects[mapId] !== undefined)
		window.GLOBAL_arMapObjects[mapId].container.fitToViewport();
}

</script>
<div id="BX_YMAP_MAP_RYV6uOosp3" class="bx-yandex-map" style="height: 300px; width: 100%;">загрузка карты...</div>	</div>
</div>
<h1>Форма обратной связи</h1>
<?php echo View::factory('site/contact/form', array('captcha' => $captcha))->render(); ?>