<div id="view_event_details_template">
<p class="start_and_finish">
<span class="start_value"></span><span class="end_value"></span>
</p>

<p>
<span class="label calendar_label"><?php echo $this->i18n->_('labels',
		'calendar_label')?></span> 
<span class="calendar_value"></span>
</p>


<p class="location">
<span class="label location_label">Lugar:</span>
<span class="location_value"></span>
</p>

<p class="description">
<span class="label label_description"><?php echo $this->i18n->_('labels',
		'description_label')?></span>
<p class="description_value"></p>
</p>

<div class="parseable_rrule">
<span class="label label_rrule"><?php echo $this->i18n->_('labels',
		'repeat_label')?></span>
<?php echo $this->i18n->_('labels', 'rrule_template', array('%explanation'
			=> '<span class="rrule_explained_value"></span>.'))?>
</div>

<div class="unparseable_rrule">
<span class="label label_rrule"><?php echo $this->i18n->_('labels',
		        'repeat_label')?></span>
<?php echo $this->i18n->_('labels',
		        'rrule_unparseable')?> <span class="rrule_raw_value"></span>.
</div>

<div class="actions">
<button type="button" href="#" class="addicon btn-icon-calendar-edit
link_edit_event"><?php echo $this->i18n->_('labels','modify')?></button>
<button type="button" href="#" class="addicon btn-icon-calendar-delete
link_delete_event"><?php echo $this->i18n->_('labels','delete')?></button>
</div>

</div>
