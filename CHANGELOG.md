# Changelog
Todas as mudanças notáveis neste projeto serão documentadas neste arquivo.

O formato é baseado em [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
e este projeto adere para [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.7] - 2018-02-01
### Adicionado
- Permitir alterar o arquivo raiz ex. '.pdf e .jpg' na interface do tainacan. Para evitar que ter que subir de novo um item.
- Permitir ordenar os metadados na home de visualização do item
- Implementar no admin do layout da coleção um campo para definir numero de 'itens por pagina' padrão e definir os valores de exibição como 8,12,24,40;

### Modificado
- Definir a imagem do cabeçalho e a marca do repo de acordo com o recorte definido na submissão dos mesmos
- Ocultar a coleção 'tainacan-colleções" do repositorio para não permitir o acesso ao mesmo
- Retirar a visualização de um item em uma nova aba no navegador
- Modificar o filtro aplicado no canto superior esquerdo da home da coleção de 'minhas coleções' para 'todas as coleções'
- Refatorar a exclusão de itens na qual ao excluir um item não realizar a atualização de pagina
- Retirar a busca de categorias na home da item
- Retirar alertas de "evento cadastrado com sucesso" na home do item para usuarios adm
- Alterar a codificação do arquivo no exportar csv

### Corrigido
- Leitor de PDF na home do item indisponível 
- Quebra de linha em item do tipo 'texto' esta se transformando em divisão de colunas na visualização do item
- Não permite ter mais de duas votações do tipo estrela
- Corrigir duplicação de valores de metadados de dados
- Corrigir a busca avançada do tainacan na home inicial e na home da coleção
- Erro ao tentar exportar o CSV e pacote do tainacan de itens de uma coleção
- Definir a imagem do cabeçalho e a marca do repo de acordo com o recorte definido na submissão dos mesmos
- Centralização, corte e preenchimento das miniaturas dos itens 
- Corrigir a busca geral do repositório permitindo filtrar pelos metadados 'titulo' e 'descrição' dos itens
- Corrigir a ordenação dos itens na home da coleção
- Metadados compostos com alterações na home do item inconsistente
- Erro ao tentar definir somente uma unica submissão de itens
- Corrigir a definição do filtro para o metadado 'Tags' 
- Corrigir filtro do tipo data permitindo filtrar por valores de datas informadas
- Corrigir submissão em massa de arquivos retirando o travamento de tela
- Corrigir a ocultação de coleções
- Corrigir a busca avançada permitindo pesquisar por valores exato

### Removido
- 'Duplicar em outra coleção' dentro da home do item não funciona

### Obsoleto

## [0.6.1] - 2017-11-27
### Atualização da branch master para correção da release 0.6.

## [0.6] - 2017-11-24
### Adicionado
- Botão de pesquisar no fim da interface de busca avançada
- Botão de ocultar os filtros ao lado de botão pesquisar
- Botão "Voltar ao topo" na tela de submissão de arquivos
- Facilitar a remoção de muitas categorias de uma vez em "Minhas categorias'
- Botão para adicionar novas categorias

### Modificado
- Melhoria na interface "Minhas Categorias"
- Atualização de redirecionamentos e urls
- Melhoria no envio de itens ao sistema, ao enviar seus ids e thumbnails.
- Otimização do envio de PDFs em grandes quantidades e tamanhos
- Melhoria nas notificações e eventos do sistema
- Alteração da mensagem exibida na ativação/desativação de licenças
- Permição da submissão de imagens retangulares na marca do repositorio
- Aplicação de tema nas coleções
- Metadados de categorias apresentado nos formulários de submissão de itens com espaçamentos em branco
- Melhoria no tratamento de tipologia de itens

### Corrigido
- API: erro de retorno de thumbnail
- Metadado de texto longo não permite inserir múltiplos valores
- Definição de licença na submissão do item, mas não sua apresentação na visualização do item
- Correção da seleção de licenças
- Correção do relacionamento de categorias com item
- Não persistencia do tipo do item na submissão de site via URL
- Não relacionamento de categorias ao item na submissão de item
- Navegação e redirecionamento para a pagina de Perfil
- Travamento no envio de itens na submissão por arquivos
- Não carregamento de arquivos .docx na submissão de itens
- Apos ocultar os metadados, se o usuário criar um novo metadado, os metadados que estavam ocultados voltam a ficar ativos
- Não submissão de marca e capa do repositorio
- Submissão de itens por arquivo comprimido
- Validação de data inválida nos metadados do tipo data
- Não ocultação de metadados públicos
- Ao editar um item do tipo 'Texto' e passar o tipo para 'Outro' (URL) não ocorreu a mudança de interface. Não foi possível inserir a url e continuou a aparecer a caixa de texto.
- Busca principal na home inicial
- Não submissão de grandes quantidades de imagens via 'Adição por arquivos'
- Permissão de exclusão de item proprietário em uma coleção não proprietária
- Não relacionamento dos metadados padrões e fixos do repositório a um item
- Não apresentação expandida das categorias na faceta de filtros de uma coleção no MAC-OS
- Reindexação de miniaturas de PDF
- Não apresentação de resultados de uma categoria em um metadado de relacionamento
- Não apresentação do termo selecionado na ediço da categoria

### Removido
- Remoção de opções não utilziadas na tela de registro de usuário
- Remoção de extração de metadados Exif

### Obsoleto
- Extração de metadados Exif
- Duplicar em outra coleção na home do item

## [0.5] - 2017-10-09

## [0.4] - 2017-09-21

## [0.3] - 2017-04-12

[Unreleased]: https://github.com/medialab-ufg/tainacan/compare/v0.7...HEAD
[0.7]: https://github.com/medialab-ufg/tainacan/compare/v0.6.1...v0.7
[0.6.1]: https://github.com/medialab-ufg/tainacan/compare/v0.6...v0.6.1
[0.6]: https://github.com/medialab-ufg/tainacan/compare/v0.5...v0.6
[0.5]: https://github.com/medialab-ufg/tainacan/compare/v0.4...v0.5
[0.4]: https://github.com/medialab-ufg/tainacan/compare/v0.3...v0.4
[0.3]: https://github.com/medialab-ufg/tainacan/compare/v0.2...v0.3
