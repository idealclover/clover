<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<?php
$info = array(
    array(
        "id" => "zhihu",
        "name" => "知乎",
        "desc" => "Zhihu：@cuicuijiang",
        "href" => "https://www.zhihu.com/people/cuicuijiang",
        "color" => "rgb(0, 117, 210)",
        "icon" => '<svg t="1616307689361" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1770" width="20" height="20"><path d="M512 73.28A438.72 438.72 0 1 0 950.72 512 438.72 438.72 0 0 0 512 73.28z m-98.56 458.88l-16.8 66.88 23.68-20.8s53.92 61.28 64 76.48 1.44 68.96 1.44 68.96l-92.48-113.12s-29.12 101.12-68.48 124.16a97.6 97.6 0 0 1-80 6.56 342.08 342.08 0 0 0 85.44-89.76 382.88 382.88 0 0 0 39.52-119.36h-115.04s8.8-40.48 24.16-41.6 90.88 0 90.88 0l-1.76-124.8-43.2 2.24a96 96 0 0 1-32 48c-24.16 17.44-38.4 10.88-38.4 10.88s42.72-118.24 55.84-141.28 50.4-25.12 50.4-25.12l-23.04 66.72h147.84c17.6 0 18.56 40.64 18.56 40.64h-90.56v122.56s61.28-2.24 81.12 0 19.68 41.6 19.68 41.6z m329.44 160h-91.52l-65.12 46.24-13.6-46.24h-36.96v-368h208z" fill="#0075D2" p-id="1771"></path><path d="M602.88 691.68l54.88-41.44h43.04V364.64h-121.12v285.6h11.2l12 41.44z" fill="#0075D2" p-id="1772"></path></svg>',
        "url" => "https://api.spencerwoo.com/substats/?source=zhihu&queryKey=cuicuijiang",
        "query" => "data.data.totalSubs"
    ),
    array(
        "id" => "github",
        "name" => "GitHub",
        "desc" => "GitHub：@idealclover",
        "href" => "https://github.com/idealclover",
        "color" => "rgb(24, 23, 23)",
        "icon" => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#181717" viewBox="0 0 24 24"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg>',
        "url" => "https://api.spencerwoo.com/substats/?source=github&queryKey=idealclover",
        "query" => "data.data.totalSubs"
    ),
    array(
        "id" => "jike",
        "name" => "即刻 APP",
        "desc" => "即刻：@idealclover",
        "href" => "https://m.okjike.com/users/e2ede1ee-79e6-420b-92fc-9983566db44c",
        "color" => "#f8d44b",
        "icon" => '<img alt="即刻APP @idealclover" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIaSURBVDhPpdRNa1NREAbg48qNknvoqnu3+nfERUH8RNxWXLlwq+Ayv6Cu3BVKV4IFV63YxH5oPlptkxK1Nm1VaK8kM74z98zNySUhQS+8EEJ48s6cw3Uueuhw5jK1k5fc9jxVDjxTp3SL2V2IHUf1Kxfpq69NhYz4MzrwRJ2knKP/g2mJVhbaL807GfNfmym0j+xlobZPHbVKCxPBVoIGIdZIIMO+4LPks2c3ERPgeJ7l6RPzq8pzQMBDK4N4F79DpgO7DwNIfGflJ9MewNBIWim2gzQngWHZ/ONeBJ5iNIAFSDBujAMNsh1F4N2VEzQCGBoZxHWAyPDIdmrRyeloh/fzhgruAAyNDOIafvcpBotYdHL87cEw2ACI8RQTKGD0UcDieDFkyz56qmCP5FCwwzrAAiQYbQs44i4NFi67moV0rOCvP8S333SBJUwYTxMg2sJnxOmO7ApYI134DPPZKjOdKSZPuXLOT96uAgEYQ5vAJBsC2vFHd0n3I3vqfVco7RG/eHfOc8spdzau6WjWyCD6gO+QDJRGdg0Uyxa+uPaMry+lfGOZ+PHrTe5vXxpgUSvFqlkcN0s3R14BPbmEf2/NAsGIEtlTGE3Gs1aKVbI4eTlSw1N+BbBouU/5jsaNFxoptJ6lX/VdfSdSMynLNRg6NYOKjUZA9B7Yuu+l1eTq4CVb84/6dZ/mCx+zo7wREIEUq/gjWsuwv5l6gVFzAq7PAAAAAElFTkSuQmCC"></img>',
        "url" => "https://api.spencerwoo.com/substats/?source=jikeFollower&queryKey=e2ede1ee-79e6-420b-92fc-9983566db44c",
        "query" => "data.data.totalSubs"
    ),
    array(
        "id" => "bilibili",
        "name" => "BiliBili",
        "desc" => "Bilibili：@idealclover",
        "href" => "https://space.bilibili.com/5044093",
        "color" => "#fb7299",
        "icon" => '<svg t="1616318385527" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="729" width="20" height="20"><path d="M306.005333 117.632L444.330667 256h135.296l138.368-138.325333a42.666667 42.666667 0 0 1 60.373333 60.373333L700.330667 256H789.333333A149.333333 149.333333 0 0 1 938.666667 405.333333v341.333334a149.333333 149.333333 0 0 1-149.333334 149.333333h-554.666666A149.333333 149.333333 0 0 1 85.333333 746.666667v-341.333334A149.333333 149.333333 0 0 1 234.666667 256h88.96L245.632 177.962667a42.666667 42.666667 0 0 1 60.373333-60.373334zM789.333333 341.333333h-554.666666a64 64 0 0 0-63.701334 57.856L170.666667 405.333333v341.333334a64 64 0 0 0 57.856 63.701333L234.666667 810.666667h554.666666a64 64 0 0 0 63.701334-57.856L853.333333 746.666667v-341.333334A64 64 0 0 0 789.333333 341.333333zM341.333333 469.333333a42.666667 42.666667 0 0 1 42.666667 42.666667v85.333333a42.666667 42.666667 0 0 1-85.333333 0v-85.333333a42.666667 42.666667 0 0 1 42.666666-42.666667z m341.333334 0a42.666667 42.666667 0 0 1 42.666666 42.666667v85.333333a42.666667 42.666667 0 0 1-85.333333 0v-85.333333a42.666667 42.666667 0 0 1 42.666667-42.666667z" p-id="730" fill="#fb7299"></path></svg>',
        "url" => "https://api.spencerwoo.com/substats/?source=bilibili&queryKey=5044093",
        "query" => "data.data.totalSubs"
    ),
    array(
        "id" => "coolapk",
        "name" => "酷安 APP",
        "desc" => "酷安：@idealclover",
        "href" => "https://space.bilibili.com/5044093",
        "color" => "#11ab60",
        "icon" => '<svg t="1616320503434" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1920" width="20" height="20"><path d="M445.493333 46.72c95.733333-13.653333 195.626667 2.613333 281.493334 47.253333 92.373333 47.36 168.16 126.24 211.626666 220.48 46.986667 100.426667 56.16 217.706667 26.24 324.426667-26.24 94.293333-82.826667 180-159.573333 240.8-72.586667 58.133333-162.826667 94.24-255.68 101.013333-116.586667 10.293333-236.32-26.186667-328.053333-98.773333-66.08-51.52-117.546667-121.44-147.893334-199.466667-44.106667-112.48-42.186667-242.133333 5.226667-353.226666 61.866667-149.6 206.026667-261.226667 366.613333-282.506667M270.4 350.08c-61.76 30.453333-102.986667 98.4-99.413333 167.413333 0.693333 66.666667 42.72 130.24 102.933333 158.293334 39.253333 19.04 84.853333 21.173333 127.093333 12.64 49.12-10.293333 90.453333-41.973333 124.8-77.173334 53.6-54.72 86.453333-124.96 129.6-187.36 22.666667 41.173333 45.333333 82.346667 67.786667 123.573334-24.586667-15.786667-46.773333-35.04-72.16-49.653334-16.746667 11.946667-33.28 24.213333-50.186667 35.946667 62.08 49.013333 126.666667 94.826667 190.026667 142.186667 12.96 8.746667 27.84 23.253333 44.64 14.666666 17.6-7.146667 22.613333-30.346667 12.106667-45.44-52.373333-99.466667-108.48-196.906667-163.253334-295.093333-5.653333-13.066667-19.626667-22.773333-34.24-18.56-13.493333 2.133333-20.266667 15.52-27.146666 25.76-32.106667 52.8-61.813333 107.146667-97.44 157.76-33.866667 48.213333-77.12 96.373333-136.586667 110.88-58.026667 15.2-126.026667-14.506667-148.213333-71.68-17.813333-46.133333-2.933333-102.613333 36.533333-132.8 35.946667-29.013333 86.72-31.093333 129.386667-17.653333 42.666667 13.76 76.533333 44.48 110.773333 72.053333 17.493333-12.053333 36-23.146667 50.986667-38.4-44.96-39.84-93.013333-79.306667-151.146667-97.76-48.16-12.64-101.813333-13.12-146.88 10.4z" fill="#0f9d58" p-id="1921"></path><path d="M270.4 350.08c45.066667-23.52 98.72-23.04 146.88-10.4 58.133333 18.453333 106.186667 57.92 151.146667 97.76-14.986667 15.253333-33.493333 26.346667-50.986667 38.4-34.24-27.573333-68.106667-58.293333-110.773333-72.053333-42.666667-13.44-93.44-11.36-129.386667 17.653333-39.466667 30.186667-54.346667 86.666667-36.533333 132.8 22.186667 57.173333 90.186667 86.88 148.213333 71.68 59.466667-14.506667 102.72-62.666667 136.586667-110.88 35.626667-50.613333 65.333333-104.96 97.44-157.76 6.88-10.24 13.653333-23.626667 27.146666-25.76 14.613333-4.213333 28.586667 5.493333 34.24 18.56 54.773333 98.186667 110.88 195.626667 163.253334 295.093333 10.506667 15.093333 5.493333 38.293333-12.106667 45.44-16.8 8.586667-31.68-5.92-44.64-14.666666-63.36-47.36-127.946667-93.173333-190.026667-142.186667 16.906667-11.733333 33.44-24 50.186667-35.946667 25.386667 14.613333 47.573333 33.866667 72.16 49.653334-22.453333-41.226667-45.12-82.4-67.786667-123.573334-43.146667 62.4-76 132.64-129.6 187.36-34.346667 35.2-75.68 66.88-124.8 77.173334-42.24 8.533333-87.84 6.4-127.093333-12.64-60.213333-28.053333-102.24-91.626667-102.933333-158.293334-3.573333-69.013333 37.653333-136.96 99.413333-167.413333z" fill="#FFFFFF" p-id="1922"></path></svg>',
        "url" => "https://api.spencerwoo.com/substats/?source=coolapk&queryKey=idealclover",
        "query" => "data.data.totalSubs"
    ),
    array(
        "id" => "sspai",
        "name" => "少数派",
        "desc" => "少数派：@idealclover",
        "href" => "https://sspai.com/u/idealclover",
        "color" => "#d71a1b",
        "icon" => '<svg t="1616320595237" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2999" width="20" height="20"><path d="M37.926 512a474.074 474.074 0 1 0 948.148 0 474.074 474.074 0 1 0-948.148 0z" fill="#D7191A" p-id="3000"></path><path d="M714.335 274.584c-135.396 22.186-270.602 45.321-405.808 67.697-43.425 7.206-48.734 13.085-50.062 57.269-0.758 21.428 8.723 31.857 30.34 28.823 26.36-3.792 52.528-8.154 82.87-13.084v300.373c0 18.963 1.706 38.116 27.685 35.082 27.496-3.224 54.234-35.84 54.424-64.095 0.19-53.286 0-106.572 0-160.048V400.877c40.201-6.637 77.558-12.895 119.656-19.721 0 46.648 3.034 88.936-0.569 130.844-6.637 75.852 10.809 143.55 51.769 207.834 15.17 23.704 28.824 35.84 57.647 34.133 40.96-2.654 45.89-9.102 27.686-45.89-18.204-37.167-46.459-73.576-50.82-112.26-8.154-74.904-2.276-151.325-2.276-228.125 24.273-4.362 46.46-8.533 68.836-12.326 31.668-5.5 45.131-25.79 38.494-63.147-5.878-32.806-30.91-20.859-49.872-17.635z" fill="#FFFFFF" p-id="3001"></path></svg>',
        "url" => "https://api.spencerwoo.com/substats/?source=sspai&queryKey=idealclover",
        "query" => "data.data.totalSubs"
    ),
    array(
        "id" => "steam",
        "name" => "Steam",
        "desc" => "Steam：@idealclover",
        "href" => "https://steamcommunity.com/id/idealclover",
        "color" => "#1B2838",
        "icon" => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 233 233" width="20" height="20">
        <defs>
         <linearGradient id="a" x2="50%" x1="50%" y2="100%">
          <stop stop-color="#111D2E" offset="0"/>
          <stop stop-color="#051839" offset=".21248"/>
          <stop stop-color="#0A1B48" offset=".40695"/>
          <stop stop-color="#132E62" offset=".58110"/>
          <stop stop-color="#144B7E" offset=".73760"/>
          <stop stop-color="#136497" offset=".87279"/>
          <stop stop-color="#1387B8" offset="1"/>
         </linearGradient>
        </defs>
        <path fill="url(#a)" d="m4.8911 150.01c14.393 48.01 58.916 82.99 111.61 82.99 64.34 0 116.5-52.16 116.5-116.5 0-64.341-52.16-116.5-116.5-116.5-61.741 0-112.26 48.029-116.25 108.76 7.5391 12.66 10.481 20.49 4.6411 41.25z" Googl="true"/>
        <path fill="#fff" d="m110.5 87.322c0 0.196 0 0.392 0.01 0.576l-28.508 41.412c-4.618-0.21-9.252 0.6-13.646 2.41-1.937 0.79-3.752 1.76-5.455 2.88l-62.599-25.77c0.00049 0-1.4485 23.83 4.588 41.59l44.254 18.26c2.222 9.93 9.034 18.64 19.084 22.83 16.443 6.87 35.402-0.96 42.242-17.41 1.78-4.3 2.61-8.81 2.49-13.31l40.79-29.15c0.33 0.01 0.67 0.02 1 0.02 24.41 0 44.25-19.9 44.25-44.338 0-24.44-19.84-44.322-44.25-44.322-24.4 0-44.25 19.882-44.25 44.322zm-6.84 83.918c-5.294 12.71-19.9 18.74-32.596 13.45-5.857-2.44-10.279-6.91-12.83-12.24l14.405 5.97c9.363 3.9 20.105-0.54 23.997-9.9 3.904-9.37-0.525-20.13-9.883-24.03l-14.891-6.17c5.746-2.18 12.278-2.26 18.381 0.28 6.153 2.56 10.927 7.38 13.457 13.54s2.52 12.96-0.04 19.1m51.09-54.38c-16.25 0-29.48-13.25-29.48-29.538 0-16.275 13.23-29.529 29.48-29.529 16.26 0 29.49 13.254 29.49 29.529 0 16.288-13.23 29.538-29.49 29.538m-22.09-29.583c0-12.253 9.92-22.191 22.14-22.191 12.23 0 22.15 9.938 22.15 22.191 0 12.254-9.92 22.183-22.15 22.183-12.22 0-22.14-9.929-22.14-22.183z"/>
       </svg>',
        "url" => "https://api.spencerwoo.com/substats/?source=steamGames&queryKey=76561198310142748",
        "query" => "data.data.totalSubs"
    ),
);
$subs = array(
    array(
        "id" => "email",
        "name" => "Email 订阅",
        "desc" => "Email 订阅本站",
        "href" => "https://www.zhihu.com/people/cuicuijiang",
        "color" => "#168de2",
        "icon" => '<svg t="1616322364939" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4702" width="20" height="20"><path d="M854.016 342.016l0-86.016-342.016 214.016-342.016-214.016 0 86.016 342.016 212.010667zM854.016 169.984q34.005333 0 59.008 25.984t25.002667 59.989333l0 512q0 34.005333-25.002667 59.989333t-59.008 25.984l-683.989333 0q-34.005333 0-59.008-25.984t-25.002667-59.989333l0-512q0-34.005333 25.002667-59.989333t59.008-25.984l683.989333 0z" p-id="4703" fill="#168de2"></path></svg>',
        "url" => "https://mailchimp.idealclover.workers.dev",
        "query" => "data.totalSubs"
    ),
    array(
        "id" => "rss",
        "name" => "RSS 订阅",
        "desc" => "RSS: https://idealclover.top/feed",
        "href" => "https://idealclover.top/feed",
        "color" => "#ffa500",
        "icon" => '<svg t="1616322423362" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5584" width="20" height="20"><path d="M724.4 304.4C566.6 144 374.8 66.3 151.4 66.3c-21.9 0-41.2 7.2-58.2 24.2-14.6 17.1-24.4 34.1-21.9 58.4-2.4 21.9 7.2 43.7 21.9 58.2 17 14.5 36.4 24.2 58.2 24.2 179.7 0 330.3 63.1 456.6 189.4 126.2 124 189.3 274.5 189.3 454.2-2.4 21.9 7.2 41.4 21.9 58.4 17 14.6 36.5 24.2 58.2 24.2 24.2 0 43.7-9.7 58.4-24.2 17-17 24.2-36.4 24.2-58.4 0.1-225.7-77.6-415.1-235.6-570.5z m-573 51c145.7 0 267.2 51 369.1 150.6 99.6 102 150.6 223.4 150.6 369.1 0 21.9-7.2 41.4-21.9 58.4-17 14.6-36.5 24.2-58.2 24.2-24.2 0-43.7-9.7-58.2-24.2-17-17-24.2-36.4-24.2-58.4 0-99.6-36.5-182.1-104.5-252.6-70.5-68-153-104.3-252.6-104.3-21.9 0-41.2-7.2-58.2-21.9-14.6-17-24.2-36.5-21.9-58.4-2.5-24.2 7.2-43.7 21.9-58.4 16.8-16.9 36.2-24.1 58.1-24.1z m58.3 308.4c38.9 0 75.2 14.5 102 41.2 26.7 29.1 43.7 63.1 43.7 104.5 0 38.9-17 75.2-43.7 102-26.7 29.1-63.1 43.7-102 43.7-41.2 0-75.4-14.6-104.5-43.7-26.7-26.8-41.2-63.2-41.2-102 0-41.4 14.5-75.4 41.2-104.5 29.1-26.7 60.7-41.2 99.6-41.2h4.9z" p-id="5585" fill="#ffa500"></path></svg>',
        "url" => "https://api.spencerwoo.com/substats/?source=inoreader%7Cfeedly%7CfeedsPub&queryKey=https://idealclover.top/feed",
        "query" => "data.data.totalSubs"
    ),
    array(
        "id" => "telegram",
        "name" => "Telegram 订阅",
        "desc" => "Telegram: @idealcloverchannel",
        "href" => "https://t.me/idealcloverchannel",
        "color" => "#2ca5e0",
        "icon" => '<svg t="1616322471410" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6372" width="20" height="20"><path d="M512 16C238 16 16 238 16 512s222 496 496 496 496-222 496-496S786 16 512 16z m243.6 339.8l-81.4 383.6c-6 27.2-22.2 33.8-44.8 21l-124-91.4-59.8 57.6c-6.6 6.6-12.2 12.2-25 12.2l8.8-126.2 229.8-207.6c10-8.8-2.2-13.8-15.4-5l-284 178.8-122.4-38.2c-26.6-8.4-27.2-26.6 5.6-39.4l478.2-184.4c22.2-8 41.6 5.4 34.4 39z" fill="#2ca5e0" p-id="6373"></path></svg>',
        "url" => "https://api.spencerwoo.com/substats/?source=telegram&queryKey=idealcloverchannel",
        "query" => "data.data.totalSubs"
    ),
)
?>
<div class="col-12 col-lg-4">
    <div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("🤔关于我") ?></div>
        </div>
        <div class="card-body">
            <div class="intro">
                <?php _e("翠翠 idealclover") ?><br />
                <?php _e("南京大学 2016 级本科生") ?><br />
            </div>
            <style>
                .shields a:hover {
                    text-decoration:none;
                }
                .shield-item {
                    border-style: solid;
                    border-radius: .25rem;
                    border-width: 2px;
                    display: flex;
                    align-items: center;
                    padding-left: .5rem;
                    margin: .5rem 0;
                }

                .shield-name {
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                }

                .shield-number {
                    /* padding-bottom: .25rem; */
                    text-align: right;
                    padding: .25rem .5rem;
                    text-overflow: hidden;
                    color: #FFF;
                }
            </style>
            <div class="shields">
            <?php foreach ($info as $i) : ?>
                <a href="<?php echo $i['href']; ?>" target="_blank" rel="noopener noreferrer" title="<?php echo $i['desc']; ?>">
                    <div class="shield-item" data-url="<?php echo $i['url']; ?>" data-query="<?php echo $i['query']; ?>" data-id="<?php echo $i['id']; ?>" style="border-color: <?php echo $i['color']; ?>;">
                        <?php echo $i['icon']; ?>
                        <div class="col-7" class="shield-name" style="color: <?php echo $i['color']; ?>;"><?php echo $i['name']; ?></div>
                        <div class="col align-self-end shield-number" id="shield-number-<?php echo $i['id']; ?>" style="background-color: <?php echo $i['color']; ?>;">...</div>
                    </div>
                </a>
            <?php endforeach; ?>
            </div>
            <div class="contact">
                <a href="http://wpa.qq.com/msgrd?v=3&uin=1455169173&site=qq&menu=yes" rel="noreferrer" style="text-decoration: none" target="_blank" title="QQ: 1455169173">
                    <img alt="QQ: 1455169173" width="40px" class="lazy" data-src="https://image.idealclover.cn/blog/assets/icons/QQ.png">
                </a>
                <a href="http://t.me/idealclover" rel="noreferrer" style="text-decoration: none" target="_blank" title="Telegram: @idealclover">
                    <img alt="Telegram: @idealclover" width="40px" class="lazy" data-src="https://image.idealclover.cn/blog/assets/icons/telegram.png">
                </a>
                <a href="mailto:idealclover@163.com" rel="noreferrer" style="text-decoration: none" target="_blank" title="Email: idealclover@163.com">
                    <img alt="Email: idealclover@163.com" width="40px" class="lazy" data-src="https://image.idealclover.cn/blog/assets/icons/mail.png">
                </a>
                <a href="https://twitter.com/idealclover" rel="noreferrer" style="text-decoration: none" target="_blank" title="Twitter: @idealclover">
                    <img alt="Twitter: @idealclover" width="40px" class="lazy" data-src="https://image.idealclover.cn/blog/assets/icons/twitter.png">
                </a>
                <a href="https://weibo.com/idealclover" rel="noreferrer" style="text-decoration: none" target="_blank" title="Weibo: @不蠢会死的某翠">
                    <img alt="Weibo: @不蠢会死的某翠" width="40px" class="lazy" data-src="https://image.idealclover.cn/blog/assets/icons/weibo.png">
                </a>
            </div>
            <button type="button" class="btn btn-outline-dark btn-sm" style="margin-top: .5rem;" data-toggle="popover" data-placement="top" data-html="true" data-content='
                <a href="<?php $this->options->themeUrl('assets/gpg.txt'); ?>" target="_blank" class="btn btn-outline-dark btn-sm btn-block"><i class="fa fa-cloud-download" aria-hidden="true"></i> 下载</a>
				或者通过联系方式交换你的公钥<br />
				指纹:<code> 1214 A7DF 781D A437 041F 586E 6BDC AEEE FE3B 6493</code>
            </div>'><i class="fa fa-key"></i> GPG Key</button>
            <a href="<?php $this->options->siteUrl(); ?>index.php/about.html" style="margin-top: .5rem;" target="_blank" role="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-street-view"></i> <?php _e("了解更多") ?> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("🏠关于博客") ?></div>
        </div>
        <div class="card-body">
            <div class="intro">
                <?php _e("基于 Typecho 博客框架") ?><br />
                <?php _e("使用个人的") ?> <a style="text-decoration: underline" rel="noreferrer" href="https://github.com/idealclover/clover" target="_blank">clover</a> <a rel="noreferrer" href="https://github.com/idealclover/clover" rel="noreferrer" target="_blank"><img alt="clover" src="https://img.shields.io/github/stars/idealclover/clover.svg?style=social" /></a> <?php _e("主题") ?><br />
            </div>
            <div class="shields">
            <?php foreach ($subs as $i) : ?>
                <a href="<?php echo $i['href']; ?>" target="_blank" rel="noopener noreferrer" title="<?php echo $i['desc']; ?>">
                    <div class="shield-item" data-url="<?php echo $i['url']; ?>" data-query="<?php echo $i['query']; ?>" data-id="<?php echo $i['id']; ?>" style="border-color: <?php echo $i['color']; ?>;">
                        <?php echo $i['icon']; ?>
                        <div class="col-7 shield-name" style="color: <?php echo $i['color']; ?>;"><?php echo $i['name']; ?></div>
                        <div class="col align-self-end shield-number" id="shield-number-<?php echo $i['id']; ?>" style="background-color: <?php echo $i['color']; ?>;">...</div>
                    </div>
                </a>
            <?php endforeach; ?>
            <!-- <div class="more">
                <a href="https://idealclover.top/feed" target="_blank" rel="noreferrer" role="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-rss" aria-hidden="true"></i> <?php _e("RSS 订阅") ?></a>
                <a href="https://mailchi.mp/7f28311041bc/idealclover" rel="noreferrer" target="_blank" role="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-envelope" aria-hidden="true"></i> <?php _e("Email 订阅") ?></a>
                <a href="https://t.me/idealcloverchannel" target="_blank" rel="noreferrer" role="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-telegram" aria-hidden="true"></i> <?php _e("Telegram 频道订阅") ?></a>
                <a href="https://cdn.idealclover.cn/Projects/idealclover/idealclover.apk" rel="noreferrer" target="_blank" role="button" class="btn btn-outline-dark btn-sm"><i class="fa fa-android" aria-hidden="true"></i> <?php _e("下载 Android APP") ?></a>
            </div> -->
            <div class="more" style="margin-top:0.5rem">
                <div id="webpushr-subscription-button" data-size="small" data-button-text="浏览器通知订阅(beta)" data-subscriber-count-text="位用户正在订阅中" data-background-color="#7b8a8b"></div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="widget-title">
                <?php _e("😷疫情地图") ?>
            </div>
        </div>
        <div class="card-body">
            <iframe title="疫情地图" class="lazy" data-src="https://www.lovestu.com/api/project/cnmapyinqing/obj.php" height="360" frameborder="no" border="0" width="100%"> </iframe>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="widget-title av-link search-form-input">
                <?php _e("🔎搜博客") ?>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("💾博客小程序") ?></div>
        </div>
        <div class="card-body">
            <img alt="博客小程序" class="lazy" data-src="https://image.idealclover.cn/blog/assets/qrcode.png" />
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="widget-title"><?php _e("💸支持我") ?></div>
        </div>
        <div class="card-body">
            <a href="https://donate.idealclover.cn" rel="noreferrer" target="_blank">
                <img alt="支持我" class="lazy" data-src="https://image.idealclover.cn/blog/assets/donateqr.png"></img>
            </a>
            <hr />
            <a class="btn btn-outline-dark btn-block" href="https://afdian.net/@idealclover" rel="noreferrer" target="_blank" role="button"><i class="fa fa-flash" aria-hidden="true"></i> 爱发电</a>
            <a class="btn btn-outline-dark btn-block" href="https://www.patreon.com/idealclover" rel="noreferrer" target="_blank" role="button"><i class="fa fa-flash" aria-hidden="true"></i> Patreon</a>
        </div>
    </div>
</div>
<!-- end #sidebar -->