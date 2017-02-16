<?php
$property_data_types = $view_helper->get_property_data_types();

foreach( $view_helper->get_metadata_types() as $type => $label):
    if ( ! in_array($type, $view_helper->get_special_metadata()) ): ?>
        <div class="modal fade" id="meta-<?php echo $type ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-<?php echo $type ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: none;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="display: inline-block">
                            <?php echo __("Add Property", "tainacan")  . ' - ' . __( $label , 'tainacan') ?>
                        </h4>
                        <?php ?>
                        <select name="select-data-type" id="select-data-type" class="form-control" style="display: none" onchange="change_meta_type()">
                            <?php foreach($property_data_types as $tipo => $titulo ): ?>
                                <option value="<?php echo $tipo ?>"> <?php echo $titulo ?> </option>
                            <?php endforeach; ?>
                        </select>
                         <?php ?>
                    </div>

                    <div class="modal-body">
                        <form id="submit_form_property_data_<?php echo $type ?>" name="submit_form_property_data_<?php echo $type ?>" class="form_property_data">
                            <div id="data-title-name" style="margin-bottom: 15px;">
                                <div class="metadata-common-fields">
                                    <div class="create_form-group">
                                        <label for="property_data_name"><?php _e('Property name','tainacan'); ?></label>
                                        <input type="text" class="form-control" id="property_data_name" name="property_data_name" placeholder="<?php _e('Property name','tainacan'); ?>">
                                    </div> <br />
                                </div>
                                <!-- Para propriedades fixas -->
                                <div class="metadata-fixed-fields" style="display:none;">
                                    <div class="create_form-group">
                                        <label for="property_fixed_name"><?php _e('Property name','tainacan'); ?></label>
                                         <input type="text" 
                                                class="form-control" 
                                                id="property_fixed_name" 
                                                name="property_fixed_name" 
                                                placeholder="<?php _e('Property name','tainacan'); ?>">
                                    </div> <br />
                                </div>   
                                <a style="cursor: pointer;" onclick="toggle_advanced_configuration('#data-advanced-configuration-<?php echo $type ?>')">
                                    <?php _e('Advanced Configuration', 'tainacan') ?> <span class="glyphicon glyphicon-triangle-bottom"></span>
                                </a>
                            </div>  
                            <div id="data-advanced-configuration-<?php echo $type ?>" style="display: none;">
                                <div class="metadata-common-fields">
                                    <div id="default_field" class="create_form-group">
                                        <label for="socialdb_property_default_value"><?php _e('Property data default value','tainacan'); ?></label>
                                        <input type="text" class="form-control" id="socialdb_property_data_default_value" name="socialdb_property_default_value" placeholder="<?php _e('Property Data Default Value','tainacan'); ?>"><br>
                                    </div>
                                    <div class="create_form-group">
                                        <label for="socialdb_property_help"><?php _e('Text helper','tainacan'); ?></label>
                                        <input type="text" class="form-control" id="socialdb_property_data_help" name="socialdb_property_data_help" />
                                    </div>
                                    <br>
                                    <div class="create_form-group">
                                        <label for="socialdb_property_help"><?php _e('Mask','tainacan'); ?></label>
                                        <select name='socialdb_property_data_mask' id='socialdb_property_data_mask' class="form-control">
                                            <option value=""><?php _e('Select...','tainacan') ?></option>
                                            <option value="key">_<?php _e('key','tainacan') ?></option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group" style="display: inline-block;">
                                        <label for="property_term_required" style="margin-right: 10px;" ><?php _e('Elements Quantity','tainacan'); ?> : </label>
                                        &nbsp;<input type="radio" name="socialdb_property_data_cardinality" id="socialdb_property_data_cardinality_1" checked="checked"  value="1">&nbsp;<?php _e('Unic value','tainacan') ?>
                                        &nbsp;<input type="radio" name="socialdb_property_data_cardinality" id="socialdb_property_data_cardinality_n" value="n">&nbsp;<?php _e('Multiple values','tainacan') ?>
                                    </div>
                                    <div class="form-group" style="display: inline-block;">
                                        <label for="property_term_required" style="margin-right: 10px;" ><?php _e('Visualization','tainacan'); ?> : </label>
                                        &nbsp;<input type="radio" name="socialdb_event_property_visualization" id="socialdb_property_data_visualization_public" checked="checked"  value="public">&nbsp;<?php _e('Public','tainacan') ?>
                                        &nbsp;<input type="radio" name="socialdb_event_property_visualization" id="socialdb_property_data_visualization_restrict" value="restrict">&nbsp;<?php _e('Restrict','tainacan') ?>
                                    </div>
                                    <div id="required_field" class="form-group" >
                                        <input type="checkbox" name="property_data_required" id="property_data_required_true"  value="true">&nbsp;<b><?php _e('Required','tainacan'); ?></b>
                                    </div>

                                    <input type="hidden" name="property_data_widget" value="<?php echo $type ?>" class="property_data_widget">
                                    <input type="hidden" name="orientation" value="left-column">

                                    <hr class="hr-style">
                                </div>
                                
                                <!-- Selecao de aba -->
                                <div class="form-group">
                                    <label for="socialdb_event_property_tab"><?php _e('Select the tab','tainacan'); ?></label>
                                    <select class="socialdb_event_property_tab form-control" name="socialdb_event_property_tab">
                                    </select>
                                </div>
                            </div>    
                            <div class="form-group">
                                <label for="use-filter"><?php _e('Use as a filter','tainacan'); ?></label>
                                <input type="checkbox" value="use_filter" name="property_data_use_filter" class="property_data_use_filter" />
                            </div>

                            <div class="form-group data-widget" style="display: none;">

                                <label for="search_data_widget"><?php _e('Filter type','tainacan'); ?></label>
                                <select name="search_data_widget" id="search_data_widget" class="form-control" data-type="<?php echo $type ?>"
                                        onclick="select_tree_color('<?php echo "#meta-$type" ?>')"
                                        onchange="show_increase_btn('<?php echo $type ?>', this)">
                                    <?php echo $view_helper->get_type_default_widget( $type ); ?>
                                </select>

                                <?php if ( in_array($type, ["date", "numeric"]) ) { ?>
                                    <br />
                                    <div id="data_range_submit" style="display: none">
                                        <div id="data_range_form"></div>
                                        <button type="button" class="range_increaser" data-type="<?php echo $type ?>"
                                                onclick="increase_data_range()">
                                            <span class="glyphicon glyphicon-plus"></span><?php _e('Add','tainacan') ?>
                                        </button>
                                    </div>
                                    <input type='hidden' id='counter_data_range' name="counter_data_range" value='0'>
                                <?php } ?>

                                <div id="color_field_property_search"
                                    <?php if ($type != "text") { ?> style="display: none;" <?php } else { ?> style="display: block" <?php } ?> >
                                    <h5 style="color: black"><strong><?php _e('Set the facet color','tainacan'); ?></strong></h5>
                                    <div class="form-group" style="padding-left: 5px">
                                        <?php for ($i = 1; $i < 14; $i++) {
                                            echo '<label class="radio-inline"> <input type="radio" class="color_property" name="color_facet" id="color_property' . $i . '" value="color_property' . $i . '" ';
                                            echo '><img src="' . get_template_directory_uri() . '/libraries/images/cor' . $i . '.png">  </label>';
                                        }; ?>
                                    </div>
                                </div>
                                    
                                <div class="form-group" style="margin-top: 15px;margin-bottom: 15px;">
                                    <label for="property_term_required" style="margin-right: 10px;" ><?php _e('Ordenation','tainacan'); ?> : </label>
                                    &nbsp;<input type="radio" name="filter_ordenation" id="filter_ordenation_a" checked="checked"  value="alphabetic">&nbsp;<?php _e('Alphabetic','tainacan') ?>
                                    &nbsp;<input type="radio" name="filter_ordenation" id="filter_ordenation_1" value="number">&nbsp;<?php _e('Items number','tainacan') ?>
                                </div>
                            </div>

                            <input type="hidden" id="is_property_fixed" name="is_property_fixed" value="false">
                            <input type="hidden" name="property_category_id" value="<?php echo $category->term_id; ?>">
                            <input type="hidden" name="property_metadata_type" value="<?php echo $type ?>" id="property_metadata_type">
                            <input type="hidden" id="property_data_collection_id" name="collection_id" value="<?php echo $collection_id ?>">
                            <input type="hidden" id="property_data_id" name="property_data_id" value="">
                            <input type="hidden" id="operation_property_data" name="operation" value="add_property_data">
                            <input type="hidden" id="search_add_facet" name="search_add_facet" value="">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left close-modal" data-dismiss="modal"><?php _e('Cancel','tainacan') ?></button>
                        <button type="submit" class="btn btn-primary action-continue" form="submit_form_property_data_<?php echo $type ?>">
                            <?php _e('Continue','tainacan') ?>
                        </button>
                    </div>
                    </div>
                </div>
            </div>
            <?php
        endif;
endforeach;
 
?>
<div class="modal fade" id="modal_remove_property" tabindex="-1" role="dialog" aria-labelledby="modal_remove_property_data" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="submit_delete_property">
                <input type="hidden" id="property_delete_collection_id" name="collection_id" value="">
                <input type="hidden" id="property_delete_id" name="property_delete_id" value="">
                <input type="hidden" id="operation" name="operation" value="delete">
                <input type="hidden" name="type" id="type" value="1">

                <input type="hidden" name="property_category_id" value="" id="property_category_id">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span>&nbsp;<?php echo __('Removing property','tainacan'); ?></h4>
                </div>

                <div class="modal-body">
                    <?php _e('Confirm the exclusion of ','tainacan'); ?> <span id="deleted_property_name"></span> ?
                </div>
                
                <div id="compound_remove_all_properties" style="display:none;padding-left: 15px;">
                    <input type="checkbox" name="remove_subproperties" value="true">&nbsp;<?php _e('Remove all sub-properties','tainacan') ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','tainacan'); ?></button>
                    <button type="submit" class="btn btn-primary"><?php _e('Salve','tainacan'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
<!------------ EDICAO DE METADADO FIXO ---------------------------------------->
<div class="modal fade" id="modal_edit_fixed_property" tabindex="-1" role="dialog" aria-labelledby="modal_edit_fixed_property" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: none;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel" style="display: inline-block">
                            <?php echo __("Edit Property Fixed", "tainacan")  ?>
                        </h4>
            </div>
            <div class="modal-body">
                    <div class="metadata-common-fields">
                        <input type="hidden" id="property_fixed_id">
                        <div class="create_form-group">
                            <label for="property_fixed_name">
                                <?php _e('Property name','tainacan'); ?>
                            </label>
                            <input type="text" 
                                   class="form-control" 
                                   id="property_fixed_name" 
                                   name="property_fixed_name" 
                                   placeholder="<?php _e('Property name','tainacan'); ?>">
                        </div> 
                         <!-- Selecao de aba -->
                        <div class="form-group">
                                <label for="socialdb_event_property_tab"><?php _e('Select the tab','tainacan'); ?></label>
                                <select id="socialdb_event_property_tab_fixed" class="socialdb_event_property_tab form-control" name="socialdb_event_property_tab">
                                </select>
                        </div>
                        <div class="create_form-group">
                             <div id="required_field" >
                                    <label for="property_fixed_required" style="display: block"><?php _e('Required metadata','tainacan'); ?></label>
                                    <input type="checkbox" name="property_fixed_required" id="property_fixed_required"  value="true">&nbsp;<?php _e('Yes','tainacan'); ?>
                            </div>
                        </div> 
                        </div>  
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','tainacan'); ?></button>
                <button onclick="alter_fixed_properties_label()" type="button" class="btn btn-primary"><?php _e('Salve','tainacan'); ?></button>
            </div>
        </div>
    </div>
</div>
<?php
foreach( ['object', 'term', 'voting', 'filter', 'tag','compounds'] as $metadata ) {
    include_once "metadata/form_$metadata.php";
}
?>

