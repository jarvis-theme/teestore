<div class="center">
    <h1>Terms of Use and Privacy Statement</h1>
    <hr>
</div>
<div class="col-xs-12 col-sm-12">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h4 class="panel-title">Term of Service Policy</h4>
                </a>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">{{ $service->tos }}</div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#refund">
                    <h4 class="panel-title">Refund</h4>
                </a>
            </div>
            <div id="refund" class="panel-collapse collapse">
                <div class="panel-body">{{ $service->refund }}</div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#privacy">
                    <h4 class="panel-title">Privacy Policy</h4>
                </a>
            </div>
            <div id="privacy" class="panel-collapse collapse">
                <div class="panel-body">{{ $service->privacy }}</div>
            </div>
        </div>
    </div>
</div>
