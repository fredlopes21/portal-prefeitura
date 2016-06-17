var enderecosApp = angular.module("enderecosMod", [])
	.controller("enderecosCtrl", function($scope, $http){
		$scope.endereco = [
		{	atendimento: 'Segunda a Sexta das 07:45 as 12:00H | 13:15 as 17:00H',
			street: 'Av. do Rosário - 211',
			telefone: '(45) 3288-1144',
			cnpj: '95.594.776/0001-93'
		}
		]
	})