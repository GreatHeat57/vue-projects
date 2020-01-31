<template>
	<div>
        <div class="modal fade" id="setlang" role="dialog" tabindex="1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog custom-dialog">
                <div class="modal-content" style="border:none;">
                    <div class="container-fluid lang-sec" style="margin-top: 450px;">
						<p class="lang-head">Select your Favorite Language</p>
						<div class="lag-box">
							<div class="lang">
								<a href="#" data-dismiss="modal">
									<div class="flag">
										<img src="../../assets/images/lang/uk.png" />
									</div>
									<p class="l-name">Turkce</p>
								</a>
							</div>
							<div class="lang">
								<a href="#" data-dismiss="modal">
									<div class="flag">
										<img src="../../assets/images/lang/en.png" />
									</div>
									<p class="l-name">English</p>
								</a>
							</div>
							<div class="lang">
								<a href="#" data-dismiss="modal">
									<div class="flag">
										<img src="../../assets/images/lang/de.png" />
									</div>
									<p class="l-name">Deutsch</p>
								</a>
							</div>
							<div class="lang">
								<a href="#" data-dismiss="modal">
									<div class="flag">
										<img src="../../assets/images/lang/sp.png" />
									</div>
									<p class="l-name">Spanish</p>
								</a>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'LangSection',
    data() {
        return {
            
        }
    },
}
</script>