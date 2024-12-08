<?php

namespace app\services\messages;

defined('BASEPATH') or exit('No direct script access allowed');

use app\services\messages\AbstractPopupMessage;

class ReOrderTaskChecklistItems extends AbstractPopupMessage
{
    public function isVisible(...$params)
    {
        $item_id = $params[0]['checklist_id'];
        $task_id = $params[0]['task_id'];

        return ($task_id == 1 || $task_id == 2 || $task_id == 3 || $task_id == 4 || $task_id == 5) && $item_id == 8;
    }

    public function getMessage(...$params)
    {
        return 'Seems like that you are enjoying creating tasks checklist items, did you know that you can easily re-order the items by dragging them above or below? <br /><br />
         <img alt="checklist-items-drag" class="img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAClCAYAAACqcw9sAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDY3IDc5LjE1Nzc0NywgMjAxNS8wMy8zMC0yMzo0MDo0MiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjI3ODFDQjEyQkNCMzExRTdBQTA1OEI3NTE4MzhCRDlDIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjI3ODFDQjEzQkNCMzExRTdBQTA1OEI3NTE4MzhCRDlDIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6Mjc4MUNCMTBCQ0IzMTFFN0FBMDU4Qjc1MTgzOEJEOUMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6Mjc4MUNCMTFCQ0IzMTFFN0FBMDU4Qjc1MTgzOEJEOUMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz51tX63AAAeSklEQVR42uzd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">';
    }
}
