
<?php include 'header.php';?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Napi célok
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title">Húzd az eseményt a kívánt időpontra</h4>
                    </div>
                    <div class="box-body">
                        <!-- the events -->
                        <div id="external-events">
                            <div class="external-event default-green">Alvás</div>
                            <div class="external-event default-yellow">Munka</div>
                            <div class="external-event default-green">Étkezés</div>
                            <div class="external-event default-yellow">Fürdés & Fogmosás</div>
                            <div class="external-event default-red">Doglozat írás</div>
                            <div class="checkbox">
                                <label for="drop-remove">
                                    <input type="checkbox" id="drop-remove">
                                   Levétel a listáról a behúzás követően
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Célok felvétele</h3>
                    </div>
                    <div class="box-body">
                        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                            <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                            <ul class="fc-color-picker" id="color-chooser">
                                <li><a class="event-green" href="#"><i class="fa fa-square"></i><span>Pozitív</span></a></li>
                                <li><a class="event-yellow" href="#"><i class="fa fa-square"></i><span>Semleges</span></a></li>
                                <li><a class="event-red" href="#"><i class="fa fa-square"></i><span>Negatív</span></a></li>
                            </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="input-group">
                            <input id="new-event" type="text" class="form-control" placeholder="Életesemény">

                            <div class="input-group-btn">
                                <button id="add-new-event" type="button" class="btn btn-event-primary btn-flat">Hozzáad</button>
                            </div>
                            <!-- /btn-group -->
                        </div>
                        <!-- /input-group -->
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <!-- THE CALENDAR -->
                        <div id="calendar"></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'footer.php';?>
