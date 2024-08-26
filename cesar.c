#include <stdio.h>
#include <string.h>

int main() {
    char vet1[] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    char vet2[] = "DEFGHIJKLMNOPQRSTUVWXYZABC";
    
    char mensagem[100];
    int opcao;
    
    printf("Digite uma mensagem em letras maiusculas: ");
    fgets(mensagem, sizeof(mensagem), stdin);
    getchar();
    printf("**************************\n");
    printf("Escolha uma opcao:\n");
    printf("1. Encriptar\n");
    printf("2. Decriptar\n");
    printf("**************************\n");
    scanf("%d", &opcao);
    getchar();
    
    if(opcao == 1) {
        for(int i = 0; i < strlen(mensagem); i++) {
            for(int j = 0; j < 26; j++) {
                if(mensagem[i] == vet1[j]) {
                    mensagem[i] = vet2[j];
                    break;
                }
            }
        }
        printf("Mensagem encriptada: %s\n", mensagem);
    } else if(opcao == 2) {
        for(int i = 0; i < strlen(mensagem); i++) {
            for(int j = 0; j < 26; j++) {
                if(mensagem[i] == vet2[j]) {
                    mensagem[i] = vet1[j];
                    break;
                }
            }
        }
        printf("Mensagem decriptada: %s\n", mensagem);
    } else {
        printf("Opcao invalida.\n");
    }

    return 0;
}
