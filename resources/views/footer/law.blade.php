<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @include('common/resource')
    <link href="{{URL::asset('css/register.css')}}" rel="stylesheet"/>
    <style>
        .body-main {
            min-height: 100%;
            height: auto !important;
            height: 100%;
            margin: -51px auto -259px;
            padding-top: 51px;
            padding-bottom: 239px;
        }

        .p30 {
            padding: 30px;
        }
        .mt30 {
            margin-top: 30px;
        }
        .tc {
            text-align: center;
        }
    </style>
</head>
<body>
@include('common/header')
<div class="container">
<div class="row">
    <h3 class="tc mt30">服务协议</h3>
    <article class="entry p30">
        <p>
            欢迎您使用FreeAPI提供的在线接口文档工具，请仔细阅读下列内容并在明确理解的前提下注册：为获得FreeAPI所提供的相关服务，您需要同意本条款内容并按照页面上的提示完成注册程序。如果您在注册过程中勾选“同意遵守【FreeAPI服务协议】”选项即表示完全接受本条款的所有内容，并且在知情的基础上明确同意按条款的规定处理和使用。如果您不接受本条款，请不要安装、使用、注册或以其他方式访问我们的服务。</p>
        <h4 class="entry-title">服务内容:</h4>
        <p>我们保留随时修改本条款的权利，并会在修改后于本页面公布修改后的文本，因此，请经常查看本页。如果您继续使用我们的服务，就视同接受我们对本条款的修改。</p>
        <h4 class="entry-title">使用规则:</h4>
        <p>
            1、您需要先同意我们的服务条款及本隐私权政策，成为我们的网站注册账户，才能使用我们的服务。在您注册时，我们会要求您提供个人信息，例如您的姓名、电子邮件地址和密码、电话号码等。这些信息视为您的身份识别信息，我们用这些信息来管理您的账户，并为您提供一系列服务的访问。我们也可能利用这些信息来通知您最新的产品更新和市场活动。</p>
        <p>2、您注册成功后，我们将给予您相应的帐号及密码，该帐号和密码由您负责保管，请您不要将您的帐号、密码转让或出借予他人使用。如您发现您的帐号遭他人非法使用，应立即通知我们并授权我们作出处理。</p>
        <p>
            3、确保您在每个上网时段结束时，以正确步骤离开网站。本公司不能也不会对因您未能遵守本款规定而发生的任何损失或损毁负责。除非有法律规定或司法裁定，且征得我们的同意，否则，您的用户名和密码不得以任何方式转让、赠与或继承（与帐户相关的财产权益除外）。因他人未经授权使用您的用户名和密码造成的损失由您自行承担或依法由擅用人承担，本网站尽力保证您的帐户安全但不保证您帐户安全的绝对性。</p>
        <p>
            4、对于开发者利用即时通讯通道所发布的信息，FreeAPI保留依据国家相关法律法规对其通讯的信息进行关键词过滤的权利，如发现开发者发送内容明确存在违反国家相关法律法规的，FreeAPI有权作出包括但不限于劝阻、拦截、直至向有关公安部门举报等行为。但这并不表示FreeAPI对开发者所发送的内容有过滤或审核的义务，也没有任何审查、审核、监督的责任或其他连带责任。开发者需自行对发送该等信息的行为承担一切责任，与FreeAPI无关，必要时开发者还需承担由此给FreeAPI造成的相关损失。</p>
        <p>5、您在使用我们提供的服务时，必须遵循以下原则：
            <br>不得危害国家安全、泄露国家秘密，不得侵犯国家社会集体的和公民的合法权益，不得制作、复制、查阅和传播下列信息：
            <br>违反宪法确定的基本原则的；
            <br>危害国家安全，泄漏国家机密，颠覆国家政权，破坏国家统一的；
            <br>损害国家荣誉和利益的；
            <br>煽动民族仇恨、民族歧视，破坏民族团结的；
            <br>破坏国家宗教政策，宣扬邪教和封建迷信的；
            <br>散布谣言，扰乱社会秩序，破坏社会稳定的；
            <br>散布淫秽、色情、赌博、暴力、恐怖或者教唆犯罪的；
            <br>侮辱或者诽谤他人，侵害他人合法权益的；
            <br>煽动非法集会、结社、游行、示威、聚众扰乱社会秩序的；
            <br>以非法民间组织名义活动的；
            <br>含有法律、行政法规禁止的其它内容的。
            <br>不得用任何不正当手段损害我们及其他用户的利益及声誉。
            <br>违反上述规定的，我们有权终止对您进行服务，并协助互联网有关行政机关等进行追索和查处。</p>
        <p>
            6、非经我们或我们授权开发并正式发布的其它任何由本FreeAPI衍生的软件均属非法，下载、安装、使用上述衍生此类软件，将可能导致不可预知的风险，建议您不要轻易下载、安装、使用，由此产生的一切法律责任与纠纷一概与我们无关。</p>
        <h4 class="entry-title">保密条款:</h4>
        <p>
            1、保密资料指由一方向另一方披露的所有技术及非技术信息(包括但不限于产品资料，产品计划，价格，财务及营销规划，业务战略，客户信息，客户数据，研发，软件硬件，API应用数据接口，技术说明，设计，特殊公式，特殊算法等。</p>
        <p>2、本协议任何一方同意对获悉的对方之上述保密资料予以保密，并严格限制接触上述保密信息的员工遵守本条之保密义务。除非国家机关依法强制要求或上述保密资料已经进入公有领域外，接受保密资料的一方不得对外披露。</p>
        <p>
            3、本协议双方明确认可各自用户信息和业务数据等是各自的重要资产及重点保密信息。本协议双方同意尽最大的努力保护上述保密信息等不被披露。一旦发现有上述保密信息泄露事件，双方应合作采取一切合理措施避免或者减轻损害后果的产生。</p>
        <p>4、本条款不因本协议的终止而失效。</p>
        <h4 class="entry-title">隐私保护:</h4>
        <p>
            1、为了给您提供更好的服务，当您注册或者使用FreeAPI时，服务器会自动记录一些信息，包括URL、IP地址、浏览器的类型和使用的语言以及访问日期和时间等。除了得到您的授权、或者相关政府部门根据法律法规的规定提出要求，我们将不会泄露您的任何信息。</p>
        <p>2、您的接口文档数据是保存在我们的服务器上，如果您公司对接口文档保密性要求较高，或者您对此有异议，请不要使用FreeAPI。</p>
        <h4 class="entry-title">知识产权:</h4>
        <p>1、FreeAPI的一切版权等知识产权，以及与FreeAPI相关的所有信息内容，包括但不限于著作、图片、档案、资讯、资料、架构、页面设计，均由本公司依法拥有其知识产权。</p>
        <p>2、 除FreeAPI或第三方明示同意外，您无权复制、传播、转让、许可或提供他人使用上述资源，否则必须承担相应的责任。</p>
        <h4 class="entry-title">免责申明:</h4>
        <p>如发生下述情形，本网站及FreeAPI不承担任何法律责任：</p>
        <p>1、依据法律规定或相关政府部门的要求提供您的个人信息；</p>
        <p>2、由于您的使用不当而导致任何个人信息的泄露；</p>
        <p>3、任何由于黑客攻击，电脑病毒的侵入，非法内容信息、骚扰信息的屏蔽，政府管制以及其他任何网络、技术、通信线路、信息安全管理措施等原因造成的服务中断、受阻等不能满足用户要求的情形；</p>
        <p>4、用户因第三方如运营商的通讯线路故障、技术问题、网络、电脑故障、系统不稳定及其他因不可抗力造成的损失的情形；</p>
        <p>5、 使用FreeAPI可能存在的来自他人匿名或冒名的含有威胁、诽谤、令人反感或非法内容的信息而招致的风险；</p>
        <h4 class="entry-title">联系我们:</h4>
        <p>如果您对本服务条款有任何问题或建议或有其他事情需要联系我们，请发邮件到:848280118@qq.com</p>
        <h4 class="entry-title">其他条款:</h4>
        <p>1、本服务协议所定的任何条款的部分或全部无效的者，不影响其它条款的效力。</p>
        <p>2、本服务协议的解释、效力及纠纷的解决，适用于中华人民共和国法律</p>
    </article>
</div>
</div>
@include('common/footer')
</body>
</html>