<?php
/**
 * Created by PhpStorm.
 * User: mahatehotia
 * Date: 03/12/17
 * Time: 22:35
 */

include 'header.php';

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" action="" method="post">
                    <fieldset>
                        <legend class="text-center">Ajout d'un service</legend>

                        <!-- Nom input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="nomService">Nom:</label>
                            <div class="col-md-9">
                                <input id="nomService" name="nomService" type="text" required>
                            </div>
                        </div>
                        <!-- cout input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="coutService">cout</label>
                            <div class="col-md-9">
                                <input id="coutService" name="coutService" type="text" required>
                            </div>
                        </div>

                        <!-- Image input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="imageService">Image</label>
                            <div class="col-md-9">
                                <input id="imageService" name="imageService" type="file" required>
                            </div>
                        </div>

                        <!-- description -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="detailService">Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="detailService" name="detailService" rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-info" name="serviceToAdd">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                                </button>
                                <button type="reset" class="btn btn-danger">
                                    <i class="fa fa-times" aria-hidden="true"></i> Annuler
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
