<?php require_once('header.php') ?>
<style>
    body.dragging,
    body.dragging * {
        cursor: move !important;
    }

    .dragged {
        position: absolute;
        opacity: 0.5;
        z-index: 2000;
    }

    ol.example li.placeholder {
        position: relative;
        /** More li styles **/
    }

    ol.example li.placeholder:before {
        position: absolute;
        /** Define arrowhead **/
    }
    /* ol .highlight{
        animation: blink;
    animation-duration: 1.5s;
    animation-iteration-count:infinite;
    }
    @keyframes blink{
  0%{transform:scale(1);}
  50%{transform:scale(0.95);}
  100%{transform:scale(1);}
} */
ol li{
    border: 1px solid #ccc;
    margin-top: 12px;
    padding:12px;
    
}
 .one li{
    border-radius: 4PX;
    border-left: 5px solid #5AD111;
}
 .two li{
    border-left: 5px solid #158CCF;
    border-radius: 4PX;
}
 .three li{
    border-left: 5px solid #4515CF;
    border-radius: 4PX;
}


ol{
    list-style:none;
    padding: 0;
}

ol li:hover{
    transform: scale(1);
  transition: transform .5s;
}
.over{
    overflow-x: scroll;
}
.d-flex{
    gap: 30px;
}
.col-md-4{
    border:1px solid #ccc;
    padding:15px;
    border-radius: 4px;
}

</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="over">
        <div class="d-flex">
            <div class="col-md-4">
                <ol class="simple_with_animation vertical one">
                <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>

                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <ol class="simple_with_animation vertical two">
                <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>

                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <ol class="simple_with_animation vertical three">
                <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>

                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <ol class="simple_with_animation vertical three">
                <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>

                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                </ol>
            </div>
            <div class="col-md-4">
                <ol class="simple_with_animation vertical three">
                <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>

                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                    <li class="highlight">
                        <h3>Asd</h3>
                        <p>lorem</p>
                    </li>
                </ol>
            </div>
        </div>
        </div>
       

    </div>
</div>
<script>
    $(function() {
        var adjustment;

        $("ol.simple_with_animation").sortable({
            group: 'simple_with_animation',
            pullPlaceholder: false,
            // animation on drop
            onDrop: function($item, container, _super) {
                var $clonedItem = $('<li/>').css({
                    height: 0
                });
                $item.before($clonedItem);
                $clonedItem.animate({
                    'height': $item.height()
                });

                $item.animate($clonedItem.position(), function() {
                    $clonedItem.detach();
                    _super($item, container);
                });
            },

            // set $item relative to cursor position
            onDragStart: function($item, container, _super) {
                var offset = $item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super($item, container);
            },
            onDrag: function($item, position) {
                $item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            }
        });
    });
</script>
<script src="https://johnny.github.io/jquery-sortable/js/jquery-sortable.js"></script>

<?php require_once('footer.php') ?>