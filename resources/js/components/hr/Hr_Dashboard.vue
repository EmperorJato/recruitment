<template>
	<mdb-container>
		<mdb-row>
			<mdb-col sm="4">
				<mdb-card>
					<mdb-view hover>
						<a href="#!">
							<mdb-card-image src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap"></mdb-card-image>
							<mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
						</a>
					</mdb-view>
					<mdb-card-body>
						<a class="activator mr-4"><mdb-icon icon="share-alt" /></a>
						<mdb-card-title>Light version</mdb-card-title>
						<hr/>
						<mdb-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</mdb-card-text>
						<a class="black-text d-flex justify-content-end"><h5>Read more <mdb-icon icon="angle-double-right" class="pl-1" /></h5></a>
					</mdb-card-body>
				</mdb-card>
			</mdb-col>
      <mdb-col sm="4">
				<mdb-card>
					<mdb-view hover>
						<a href="#!">
							<mdb-card-image src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap"></mdb-card-image>
							<mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
						</a>
					</mdb-view>
					<mdb-card-body>
						<a class="activator mr-4"><mdb-icon icon="share-alt" /></a>
						<mdb-card-title>Light version</mdb-card-title>
						<hr/>
						<mdb-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</mdb-card-text>
						<a class="black-text d-flex justify-content-end"><h5>Read more <mdb-icon icon="angle-double-right" class="pl-1" /></h5></a>
					</mdb-card-body>
				</mdb-card>
			</mdb-col>
      <mdb-col sm="4">
				<mdb-card>
					<mdb-view hover>
						<a href="#!">
							<mdb-card-image src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%28131%29.jpg" alt="Card image cap"></mdb-card-image>
							<mdb-mask flex-center waves overlay="white-slight"></mdb-mask>
						</a>
					</mdb-view>
					<mdb-card-body>
						<a class="activator mr-4"><mdb-icon icon="share-alt" /></a>
						<mdb-card-title>Light version</mdb-card-title>
						<hr/>
						<mdb-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</mdb-card-text>
						<a class="black-text d-flex justify-content-end"><h5>Read more <mdb-icon icon="angle-double-right" class="pl-1" /></h5></a>
					</mdb-card-body>
				</mdb-card>
			</mdb-col>
		</mdb-row>
	</mdb-container>
</template>

<script>
	import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardImage, mdbCardHeader, mdbCardBody, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardUp, mdbCardAvatar, mdbCardGroup, mdbBtn, mdbView, mdbMask, mdbIcon } from 'mdbvue';
	export default {
		name: 'CardProPage',
		components: {
			mdbContainer,
			mdbRow,
			mdbCol,
			mdbCard,
			mdbCardImage,
			mdbCardHeader,
			mdbCardBody,
			mdbCardTitle,
			mdbCardText,
			mdbCardFooter,
			mdbCardUp,
			mdbCardAvatar,
			mdbCardGroup,
			mdbBtn,
			mdbView,
			mdbMask,
			mdbIcon
		}
	}
</script>