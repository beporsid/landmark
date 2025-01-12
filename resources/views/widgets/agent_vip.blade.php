<div class="widget">
    <h3 class="widget-title">نمایندگان ویژه</h3>
    <div class="featured-agent">
       @foreach($agentWidget as $item)
        <div class="agent-item">
            <div class="thumbnail">
                <a href="/agents/{{$item->id}}" title="{{$item->name}}">
                    <img src="/landmark/images/team/thumb/agent_1.png" alt="Clark Darik">
                </a>
            </div>
            <div class="content">
                <div class="item-title">
                    <a href="/agents/{{$item->id}}" title="Clark Darik">{{$item->name}}</a>
                </div>
                <span class="total-property">0 ملک </span>
            </div>
        </div>
        @endforeach
    </div>
</div>
