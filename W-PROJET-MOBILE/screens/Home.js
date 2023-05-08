import { Image, Text, View, TouchableOpacity } from "react-native";
import { useState } from "react";
export default function Home({ navigation }) {
    return (
        <View
            className="mt-4 flex-1 flex-col  items-center justify-center "
            style={{
                backgroundColor: "#F6F6F6",
            }}
        >
            <View
                className=" mx-5 w-full basis-2/3  items-center justify-center rounded-br-full shadow-md "
                style={{
                    backgroundColor: "#ECF2F3",
                    borderBottomLeftRadius: 150,
                    borderBottomRightRadius: 150,
                }}
            >
                <Text className="  mt-24 text-3xl font-extrabold ">Tabibi</Text>
                <Image
                    source={require("../assets/Logo-Doc.png")}
                    className="h-2/3  w-80 rounded-b-full from-neutral-50 drop-shadow-xl"
                />
            </View>
            <View className="w-full basis-1/3 flex-col  items-center ">
                <Text className=" mt-7  font-bold">
                    Votre meilleur assistant médical
                </Text>
                <Text className="mt-5 px-9 text-xs ">
                    Votre meilleur assistant médical
                </Text>
                <TouchableOpacity
                    className="absolute bottom-10 mt-8 h-12 w-60 justify-center self-center rounded-lg bg-cyan-600 shadow-lg"
                    onPress={() => navigation.navigate("Doc_Login")}
                >
                    <Text className=" self-center text-xl font-bold text-white">
                        Next
                    </Text>
                </TouchableOpacity>
            </View>
        </View>
    );
}
