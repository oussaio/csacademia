<script type="text/javascript" src="/assets/lib/knockout/knockout-2.2.1.js"></script>
<script type="text/javascript" src="/assets/lib/jquery-ui/1.10.2/ui/jquery-ui.js"></script>
<script type="text/javascript" src="/assets/js/akdm.js"></script>
<script type="text/javascript" src="/assets/js/akdm.tools.js"></script>
<script type="text/javascript" src="/assets/js/akdm.ui.js"></script>
<script type="text/javascript" src="/assets/js/akdm.model.js"></script>
<script type="text/javascript" src="/assets/js/akdm.groupadmin.js"></script>
<script>
    $(document).ready(function() {
        akdm.setConfig({
            locale: '<?php echo $this->lang_code ?>'
        });

        var gvm = new akdm.GroupsViewModel();
        ko.applyBindings(gvm);
        gvm.init({
            group_created: '<?php echo lang('subject_group') . lang('message_created') ?>',
            group_updated: '<?php echo lang('subject_group') . lang('message_updated') ?>',
            group_deleted: '<?php echo lang('subject_group') . lang('message_deleted') ?>',
            server_error: '<?php echo lang('message_server_error_details') ?>'
        });
    });
</script>