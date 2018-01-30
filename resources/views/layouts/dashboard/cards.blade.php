<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box-3 bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">group</i>
            </div>
            <div class="content">
                <div class="text">Cantidad de Docentes</div>
                <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">{{ $teachersCount }}</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box-3 bg-indigo hover-expand-effect">
            <div class="icon">
                <i class="material-icons">mood</i>
            </div>
            <div class="content">
                <div class="text">Cantidad de niños</div>
                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{ $studentsCount }}</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box-3 bg-light-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">face</i>
            </div>
            <div class="content">
                <div class="text">Niños nivel 1</div>
                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{ $studentsCountLeve1 }}</div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="info-box-3 bg-light-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">face</i>
            </div>
            <div class="content">
                <div class="text">Niños nivel 2</div>
                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{ $studentsCountLeve2 }}</div>
            </div>
        </div>
    </div>
</div>