<script id="goals" type="text/x-handlebars-template">
    {{#each goals}}
        <li class="mdc-list-item mdc-ripple-upgraded" tabindex="0">

            {{#if completed}}
                <a  href="/uncomplete/{{ id }}" 
                    class="mdc-list-item__graphic completed" 
                    aria-hidden="true">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                    </svg>
                </a>
            {{else}}
                <a  href="/complete/{{ id }}" 
                    class="mdc-list-item__graphic {{ overdueClass completeBy }}" 
                    aria-hidden="true">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                    </svg>
                </a>
            {{/if}}

            <a href="/{{ id }}">
                <span class="mdc-list-item__text">
                    <span class="mdc-list-item__primary-text">{{ description }}</span>
                    <span class="mdc-list-item__secondary-text">Due {{ date completeBy }}</span>
                </span>
            </a>

            <a href="/remove/{{ id }}" class="mdc-list-item__meta" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0V0z"/>
                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                </svg>
            </a>
        </li>
    {{/each}}
</script>

<script>
    function toMonth ( number ) {
        const monthNames = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ];

        return monthNames [ number ];
    }

    Handlebars.registerHelper ( 'date', function ( timestamp ) {
        const date = new Date ( timestamp * 1000 );
        const mm = date.getMonth ( );
        const dd = date.getDate ( );
        const jjjj = date.getFullYear ( );

        return toMonth ( mm )
            + ' '
            + ( dd > 9 ? '' : '0' ) + dd
            + ', '
            + jjjj
    });

    Handlebars.registerHelper ( 'overdueClass', function ( completeBy ) {
        var date = new Date ( );
        const now = date.getTime ( );

        return ( completeBy * 1000 < now ) ? 'overdue' : '';
    });

    async function load ( url ) {
        let meta = 
            { method : 'get',
                headers: 
                { 'Content-Type': 'application/json'
                }
            }
        let response = await fetch( url, meta );
        ( { status, content } = await response.json ( ) );
        const source   = document.getElementById ( 'goals' ).innerHTML;
        const template = Handlebars.compile ( source );
        var context = { goals: content };
        var html    = template ( context );
        document.querySelector ( '#goal-listing ul' ).innerHTML = html;
    }

    all.onclick = async function ( event ) {
        event.preventDefault ( );
        load ( 'http://goalstark/' );
    };

    completed.onclick = async function ( event ) {
        event.preventDefault ( );
        load ( 'http://goalstark/completed' );
    };

    overdue.onclick = async function ( event ) {
        event.preventDefault ( );
        load ( 'http://goalstark/overdue' );
    };
</script>